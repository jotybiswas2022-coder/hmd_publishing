<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Order;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email'              => 'required|email|max:255',
            'payment_method'     => 'required|in:card,paypal,payoneer',
            'name'               => 'required|string|max:255',
            'country'            => 'nullable|string|max:255',
            'website'            => 'nullable|string|max:255',
            'plan'               => 'required|string|max:100',
            'addon'              => 'nullable|array',
            'billing_first_name' => 'nullable|string|max:255',
            'billing_last_name'  => 'nullable|string|max:255',
            'billing_address'    => 'nullable|string|max:255',
            'billing_city'       => 'nullable|string|max:255',
            'billing_postal_code'=> 'nullable|string|max:50',
        ]);

        $plan = Plan::where('key', $data['plan'])->first();

        if (!$plan) {
            return back()->withErrors(['plan' => 'Selected plan not found.']);
        }

        $selectedAddonKeys = array_keys($request->input('addon', []));
        $addonModels = Addon::whereIn('key', $selectedAddonKeys)->where('is_active', true)->get();

        $addons = $addonModels->map(fn ($addon) => [
            'key'   => $addon->key,
            'name'  => $addon->name,
            'price' => $addon->price,
        ])->values()->all();

        $addonTotal = $addonModels->sum('price');
        $total = $plan->price + $addonTotal;

        $order = Order::create([
            'order_number'        => 'HMD-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6)),
            'customer_name'       => $data['name'],
            'email'               => $data['email'],
            'country'             => $data['country'] ?? null,
            'website'             => $data['website'] ?? null,
            'plan_key'            => $plan->key,
            'plan_name'           => $plan->name,
            'plan_price'          => $plan->price,
            'addons'              => $addons,
            'addon_total'         => $addonTotal,
            'total'               => $total,
            'currency'            => (str_starts_with($plan->key, 'ghost') || in_array($plan->key, ['essentials', 'bestseller', 'empire'])) ? 'GBP' : 'USD',
            'payment_method'      => $data['payment_method'],
            'billing_first_name'  => $data['billing_first_name'] ?? null,
            'billing_last_name'   => $data['billing_last_name'] ?? null,
            'billing_address'     => $data['billing_address'] ?? null,
            'billing_city'        => $data['billing_city'] ?? null,
            'billing_postal_code' => $data['billing_postal_code'] ?? null,
            'status'              => 'pending',
        ]);

        return redirect()->route('order.success', $order)
            ->with('success', 'Your order has been placed successfully!');
    }

    public function success(Order $order)
    {
        return view('frontend.order-success', compact('order'));
    }

    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(15);

        return view('backend.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('backend.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $data = $request->validate([
            'status' => 'required|in:' . implode(',', Order::STATUSES),
        ]);

        $order->update(['status' => $data['status']]);

        return back()->with('success', 'Order status updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
