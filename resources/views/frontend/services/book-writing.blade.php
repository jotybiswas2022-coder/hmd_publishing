<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ghostwriting Services | HMD Publishing</title>
</head>

<body>

    @include('frontend.partials.navbar')

<!-- =========================================================
     TRUST
========================================================== -->
<div class="gw-trust">
    <span class="gw-stars">★★★★★</span>
    <strong>4.7 out of 5</strong>
    <span>· Based on 83 Trustpilot reviews</span>
</div>

<!-- =========================================================
     HERO
========================================================== -->
<section class="gw-hero">

    <div>

        <span class="gw-hero-eyebrow">
            Book Writing &amp; Ghostwriting
        </span>

        <h1 class="gw-h1">
            Your book idea,
            <span>written in a voice</span>
            that still feels like yours.
        </h1>

        <p class="gw-hero-text">
            Professional book ghostwriting for fiction,
            memoir, non-fiction and expert-led books —
            shaped around an agreed brief, a clear manuscript
            scope and regular author feedback.
        </p>

        <div class="gw-hero-buttons">

            <a href="#brief" class="gw-btn-primary">
                Send your project brief
            </a>

            <a href="#brief" class="gw-btn-secondary">
                Talk through your book
            </a>

        </div>

    </div>

    <div class="gw-hero-card">

        <div class="gw-hero-glow"></div>

        <div class="gw-hero-book">

            <div class="gw-book-title">
                YOUR<br>
                STORY
            </div>

            <div class="gw-book-subtitle">
                Written with your voice
            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     QUICK STATS
========================================================== -->
<div class="gw-quick-stats">

    <div class="gw-quick-stat">
        <div class="gw-quick-number">3</div>
        <div class="gw-quick-label">manuscript scopes</div>
    </div>

    <div class="gw-quick-stat">
        <div class="gw-quick-number">20k–80k</div>
        <div class="gw-quick-label">included words</div>
    </div>

    <div class="gw-quick-stat">
        <div class="gw-quick-number">4–13 weeks</div>
        <div class="gw-quick-label">planned turnaround</div>
    </div>

    <div class="gw-quick-stat">
        <div class="gw-quick-number">4</div>
        <div class="gw-quick-label">approval stages</div>
    </div>

</div>

<!-- =========================================================
     PROJECT FIT
========================================================== -->
<section class="gw-fit-section" id="brief">

    <div class="gw-fit-wrapper">

        <div class="gw-fit-intro">

            <div class="gw-eyebrow">Free project-fit review</div>

            <h2 class="gw-h2">
                Tell us what book
                you want to create.
            </h2>

            <p>
                A short text brief is enough.
                You don't need a finished manuscript
                to start the conversation.
            </p>

            <div class="gw-fit-points">

                <div class="gw-fit-point">
                    <span class="gw-check">✓</span>
                    <span>Share your idea, reader and intended outcome.</span>
                </div>

                <div class="gw-fit-point">
                    <span class="gw-check">✓</span>
                    <span>Tell us your genre and approximate word count.</span>
                </div>

                <div class="gw-fit-point">
                    <span class="gw-check">✓</span>
                    <span>Explain what source material you already have.</span>
                </div>

                <div class="gw-fit-point">
                    <span class="gw-check">✓</span>
                    <span>Give us your ideal timeline and feedback availability.</span>
                </div>

            </div>

        </div>

        <!-- FORM -->
        <form class="gw-brief-form" onsubmit="submitBrief(event)">

            <div class="gw-form-title">Book project brief</div>
            <div class="gw-form-subtitle">Step 1 of 2 · No manuscript files required</div>

            <!-- Honeypot -->
            <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
                <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="gw-form-row">

                <div class="gw-form-group">
                    <label>Book type</label>
                    <select class="gw-form-control" required>
                        <option value="">Select book type</option>
                        <option>Fiction</option>
                        <option>Memoir</option>
                        <option>Non-fiction</option>
                        <option>Expert-led book</option>
                        <option>Children's book</option>
                    </select>
                </div>

                <div class="gw-form-group">
                    <label>Target length</label>
                    <select class="gw-form-control" required>
                        <option value="">Select length</option>
                        <option>Up to 20,000 words</option>
                        <option>Up to 45,000 words</option>
                        <option>Up to 80,000 words</option>
                        <option>Not sure yet</option>
                    </select>
                </div>

            </div>

            <div class="gw-form-row">

                <div class="gw-form-group">
                    <label>Genre</label>
                    <input type="text" class="gw-form-control" placeholder="e.g. thriller, memoir, business">
                </div>

                <div class="gw-form-group">
                    <label>Material you already have</label>
                    <select class="gw-form-control">
                        <option>Select</option>
                        <option>Idea only</option>
                        <option>Notes</option>
                        <option>Partial manuscript</option>
                        <option>Full manuscript</option>
                        <option>Research / recordings</option>
                    </select>
                </div>

            </div>

            <div class="gw-form-row">

                <div class="gw-form-group">
                    <label>Ideal timeline</label>
                    <select class="gw-form-control">
                        <option>Select timeline</option>
                        <option>As soon as possible</option>
                        <option>Within 1–3 months</option>
                        <option>Within 3–6 months</option>
                        <option>Flexible</option>
                    </select>
                </div>

                <div class="gw-form-group">
                    <label>Your email</label>
                    <input type="email" class="gw-form-control" placeholder="you@example.com" required>
                </div>

            </div>

            <div class="gw-form-group">
                <label>Book idea, reader and goal</label>
                <textarea class="gw-form-control gw-textarea" maxlength="1500"
                    placeholder="Tell us about your book idea, who it is for, and what you want the finished manuscript to achieve..."
                    oninput="updateCounter(this)" required></textarea>
                <div class="gw-counter">
                    <span id="counter">0</span> / 1,500
                </div>
            </div>

            <button type="submit" class="gw-form-button">Continue</button>

            <div class="gw-form-note">
                Project details handled in confidence · reviewed within 1 business day
            </div>

        </form>

    </div>

</section>

<!-- =========================================================
     WHAT GHOSTWRITING IS
========================================================== -->
<section class="gw-section">

    <div class="gw-container">

        <div class="gw-section-heading">

            <div class="gw-eyebrow">What book ghostwriting is</div>

            <h2 class="gw-h2">
                You bring the authorship decisions.
                A ghostwriter turns them into a structured manuscript.
            </h2>

            <p>
                Ghostwriting works best when it combines
                your intent, knowledge, stories or source
                material with a professional writing process.
            </p>

        </div>

        <div class="gw-ghostwriting-grid">

            <div class="gw-info-box">

                <h3>A strong fit when…</h3>

                <p>
                    Ghostwriting is designed for authors
                    who have something meaningful to say,
                    but need professional writing support
                    to shape it into a complete manuscript.
                </p>

                <ul>
                    <li>You have a book idea, expertise, story or source material.</li>
                    <li>You know who the book is for.</li>
                    <li>You can provide feedback at agreed checkpoints.</li>
                    <li>You want rights, credit and confidentiality clearly documented.</li>
                </ul>

            </div>

            <div class="gw-info-box">

                <h3>What makes the process work</h3>

                <p>
                    A successful ghostwriting project starts
                    with clear expectations before drafting begins.
                </p>

                <ul>
                    <li>Rough premise or working title</li>
                    <li>Intended reader and genre</li>
                    <li>Likely word-count range</li>
                    <li>Notes, recordings or research</li>
                    <li>Writing voices you like and dislike</li>
                    <li>Realistic deadline and feedback availability</li>
                </ul>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     BEFORE YOU START
========================================================== -->
<section class="gw-section gw-before-section">

    <div class="gw-container">

        <div class="gw-section-heading gw-center">

            <div class="gw-eyebrow">Start with clarity</div>

            <h2 class="gw-h2">Useful before you start.</h2>

            <p>
                The more clearly the project is defined,
                the easier it is to keep the manuscript
                aligned with your expectations.
            </p>

        </div>

        <div class="gw-before-grid">

            <div class="gw-before-card">
                <div class="gw-before-icon">✦</div>
                <h3>Reader</h3>
                <p>Know who you want to reach and what you want that reader to take away from the book.</p>
            </div>

            <div class="gw-before-card">
                <div class="gw-before-icon">◇</div>
                <h3>Voice</h3>
                <p>Share examples of writing styles you like, plus anything you do not want the manuscript to sound like.</p>
            </div>

            <div class="gw-before-card">
                <div class="gw-before-icon">▤</div>
                <h3>Source material</h3>
                <p>Notes, recordings, research, interviews and reference books can help shape the manuscript.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     MANUSCRIPT WORKFLOW
========================================================== -->
<section class="gw-process-section">

    <div class="gw-container">

        <div class="gw-process-heading">

            <div class="gw-eyebrow gw-eyebrow-blue">Manuscript workflow</div>

            <h2 class="gw-h2">From idea to manuscript handover.</h2>

            <p>
                A text-only brief leads into an agreed
                outline, staged draft reviews and a
                clean manuscript handover.
            </p>

        </div>

        <div class="gw-process-grid">

            <div class="gw-process-card">
                <div class="gw-process-number">01</div>
                <h3>Project brief</h3>
                <p>Define the reader, purpose, genre, target length, source material and project constraints.</p>
            </div>

            <div class="gw-process-card">
                <div class="gw-process-number">02</div>
                <h3>Agreed outline</h3>
                <p>Build a working structure and establish the direction before full drafting accelerates.</p>
            </div>

            <div class="gw-process-card">
                <div class="gw-process-number">03</div>
                <h3>Staged drafts</h3>
                <p>Review planned chapter batches or milestones so voice and direction can be corrected early.</p>
            </div>

            <div class="gw-process-card">
                <div class="gw-process-number">04</div>
                <h3>Clean handover</h3>
                <p>Complete the agreed revisions, review continuity and prepare the manuscript for its next stage.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     WHAT PACKAGE COVERS
========================================================== -->
<section class="gw-section">

    <div class="gw-container">

        <div class="gw-section-heading">

            <div class="gw-eyebrow">Manuscript scope</div>

            <h2 class="gw-h2">What the ghostwriting engagement covers.</h2>

            <p>
                The final proposal confirms the exact
                outline, feedback cadence, research
                expectations and revision boundary.
            </p>

        </div>

        <div class="gw-ghostwriting-grid">

            <div class="gw-info-box">

                <h3>Included</h3>

                <ul>
                    <li>Project discovery and brief</li>
                    <li>Outline or structural plan</li>
                    <li>Ghostwriting up to package word limit</li>
                    <li>Scheduled author feedback checkpoints</li>
                    <li>Revision work within agreed scope</li>
                    <li>Clean manuscript handover</li>
                </ul>

            </div>

            <div class="gw-info-box">

                <h3>Priced separately</h3>

                <p>A finished draft is not automatically a finished published book.</p>

                <ul>
                    <li>Independent editing</li>
                    <li>Print and ebook formatting</li>
                    <li>Book cover design</li>
                    <li>ISBN and retailer setup</li>
                    <li>Publishing and distribution</li>
                    <li>Launch and marketing</li>
                </ul>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     PACKAGES
========================================================== -->
<section class="gw-section gw-packages-section" id="packages">

    <div class="gw-container">

        <div class="gw-section-heading gw-center">

            <div class="gw-eyebrow">Manuscript packages</div>

            <h2 class="gw-h2">Choose by target length.</h2>

            <p>Three packages from 20,000 to 80,000 words, with planned 4–13 week turnaround.</p>

        </div>

        <div class="gw-scope-grid">

            <!-- STARTER -->
            <div class="gw-package">

                <div class="gw-package-label">Package tier</div>
                <h3>Starter Manuscript</h3>
                <div class="gw-package-price">£1,497</div>
                <div class="gw-package-words">Up to 20,000 words</div>

                <ul>
                    <li>Up to 20,000 words</li>
                    <li>4 weeks planned turnaround</li>
                    <li>Project brief and agreed outline</li>
                    <li>Scheduled author feedback checkpoints</li>
                    <li>Clean manuscript handover</li>
                </ul>

                <a href="#brief" class="gw-package-btn">Choose Starter Manuscript</a>

            </div>

            <!-- FULL NOVEL -->
            <div class="gw-package gw-popular">

                <div class="gw-popular-badge">Most popular</div>
                <div class="gw-package-label">Package tier</div>
                <h3>Full Novel</h3>
                <div class="gw-package-price">£2,997</div>
                <div class="gw-package-words">Up to 45,000 words</div>

                <ul>
                    <li>Up to 45,000 words</li>
                    <li>9 weeks planned turnaround</li>
                    <li>Project brief and agreed outline</li>
                    <li>Scheduled author feedback checkpoints</li>
                    <li>Clean manuscript handover</li>
                </ul>

                <a href="#brief" class="gw-package-btn">Choose Full Novel</a>

            </div>

            <!-- EPIC -->
            <div class="gw-package">

                <div class="gw-package-label">Package tier</div>
                <h3>Epic Creation</h3>
                <div class="gw-package-price">£4,997</div>
                <div class="gw-package-words">Up to 80,000 words</div>

                <ul>
                    <li>Up to 80,000 words</li>
                    <li>13 weeks planned turnaround</li>
                    <li>Project brief and agreed outline</li>
                    <li>Scheduled author feedback checkpoints</li>
                    <li>Clean manuscript handover</li>
                </ul>

                <a href="#brief" class="gw-package-btn">Choose Epic Creation</a>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     SEPARATE SERVICES
========================================================== -->
<section class="gw-section gw-separate-section">

    <div class="gw-container">

        <div class="gw-separate-box">

            <h3>A finished draft is not yet a finished book.</h3>

            <p>
                These production and publishing stages follow
                the manuscript and are not silently bundled
                into the ghostwriting price.
            </p>

            <div class="gw-separate-grid">

                <div class="gw-separate-item">
                    <strong>Editing</strong>
                    <span>Independent editorial review after manuscript completion.</span>
                </div>

                <div class="gw-separate-item">
                    <strong>Formatting</strong>
                    <span>Professional print and ebook interior production.</span>
                </div>

                <div class="gw-separate-item">
                    <strong>Cover Design</strong>
                    <span>Market-aware cover and retail artwork.</span>
                </div>

                <div class="gw-separate-item">
                    <strong>Publishing</strong>
                    <span>ISBN, retailer setup, distribution and launch.</span>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     APPROVAL STAGES
========================================================== -->
<section class="gw-section">

    <div class="gw-container">

        <div class="gw-section-heading gw-center">

            <div class="gw-eyebrow">How you verify the work</div>

            <h2 class="gw-h2">Four approval points before the manuscript is complete.</h2>

            <p>
                Ghostwritten work is confidential,
                so the useful proof is a reviewable
                trail from brief to final handover.
            </p>

        </div>

        <div class="gw-approval-grid">

            <div class="gw-approval-card">
                <div class="gw-approval-number">01</div>
                <h3>Approve the project brief</h3>
                <p>Confirm the reader, purpose, genre, target length, source material, voice direction and desired result.</p>
            </div>

            <div class="gw-approval-card">
                <div class="gw-approval-number">02</div>
                <h3>Approve structure and voice</h3>
                <p>Review the outline and writing signals that should make the manuscript recognisably yours.</p>
            </div>

            <div class="gw-approval-card">
                <div class="gw-approval-number">03</div>
                <h3>Review staged drafts</h3>
                <p>Review planned chapter batches or milestones while the book is still being built.</p>
            </div>

            <div class="gw-approval-card">
                <div class="gw-approval-number">04</div>
                <h3>Accept the clean manuscript</h3>
                <p>Resolve feedback within scope, review continuity and approve the manuscript for its next stage.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     CONFIDENTIALITY NOTE
========================================================== -->
<section class="gw-section gw-note-section">

    <div class="gw-container">

        <div class="gw-confidential-note">

            <div class="gw-eyebrow">Confidential work should still be verifiable</div>

            <p>
                Ghostwritten manuscripts should not be displayed
                without the author's permission. A cover alone
                does not verify who wrote a manuscript, so the
                project approval trail is a more useful form of proof.
            </p>

        </div>

    </div>

</section>

<!-- =========================================================
     FAQ
========================================================== -->
<section class="gw-section gw-faq-section">

    <div class="gw-container">

        <div class="gw-section-heading gw-center">

            <div class="gw-eyebrow">FAQ</div>

            <h2 class="gw-h2">Questions authors usually ask before they commit.</h2>

            <p>Clear answers on timeline, scope, rights, revisions and what happens after checkout.</p>

        </div>

        <div class="gw-faq">

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>What does a ghostwriting package include?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    The package covers the agreed manuscript scope: project discovery, structural planning,
                    writing up to the stated word limit, scheduled feedback checkpoints, revision work within the
                    agreed brief and clean manuscript handover. Editing, formatting, cover design, publishing
                    and marketing are separate unless added to a written proposal.
                </div>

            </div>

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>Will I own the manuscript, and is the work confidential?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    Rights, authorship credit, confidentiality and permitted disclosures should be set out in the
                    written project agreement before work begins. Review that agreement carefully and clarify
                    any term before approving the project.
                </div>

            </div>

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>How long does book ghostwriting take?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    Current package planning ranges from approximately 4 weeks for the shortest scope to 13 weeks for
                    the longest. The confirmed schedule depends on project complexity, research and how quickly
                    author feedback is returned.
                </div>

            </div>

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>How do you write in my voice?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    Voice direction starts with examples, reference authors, recorded or written source material and
                    clear notes about what should not sound like you. Early feedback checkpoints help correct tone
                    and phrasing.
                </div>

            </div>

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>Which ghostwriting package should I choose?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    Choose the closest package by target word count: up to 20,000, 45,000 or 80,000 words. If the
                    structure, research burden or final length is uncertain, submit the project-fit brief first.
                </div>

            </div>

            <div class="gw-faq-item">

                <button class="gw-faq-question" onclick="toggleFaq(this)">
                    <span>Can I start if I only have an idea or rough notes?</span>
                    <span class="gw-faq-plus">+</span>
                </button>

                <div class="gw-faq-answer">
                    Yes. The idea still needs to become an agreed brief before drafting begins. A project-fit
                    review can clarify the reader, promise, structure, source material and realistic word-count range.
                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     RELATED SERVICES
========================================================== -->
<section class="gw-section">

    <div class="gw-container">

        <div class="gw-section-heading">

            <div class="gw-eyebrow">Continue the stack</div>

            <h2 class="gw-h2">Add the next layer only when it supports the launch plan.</h2>

            <p>These services can follow once the manuscript itself is structurally sound and market-ready.</p>

        </div>

        <div class="gw-related-grid">

            <div class="gw-related-card">
                <div class="gw-related-price">FROM £117</div>
                <h3>Book Editing</h3>
                <p>Bring fresh editorial eyes to the completed manuscript before production.</p>
                <a href="/services/editing">Explore service →</a>
            </div>

            <div class="gw-related-card">
                <div class="gw-related-price">FROM £147</div>
                <h3>Book Formatting</h3>
                <p>Turn the final manuscript into professional print and ebook interiors.</p>
                <a href="/services">Explore service →</a>
            </div>

            <div class="gw-related-card">
                <div class="gw-related-price">FROM £127</div>
                <h3>Book Cover Design</h3>
                <p>Build a market-aware cover once the title and positioning are stable.</p>
                <a href="/services/book-cover-design">Explore service →</a>
            </div>

            <div class="gw-related-card">
                <div class="gw-related-price">FROM £297</div>
                <h3>Publishing</h3>
                <p>Set up retailer-ready distribution once production files are complete.</p>
                <a href="/services/publishing">Explore service →</a>
            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     CTA
========================================================== -->
<section class="gw-cta-section">

    <div class="gw-cta">

        <h2>Know your target length? Compare packages.</h2>

        <p>
            Still shaping the book? Send the brief first.
            You should not have to buy the wrong manuscript
            scope just to get a useful recommendation.
        </p>

        <div class="gw-hero-buttons gw-cta-buttons">

            <a href="#packages" class="gw-btn-primary">
                Compare manuscript packages
            </a>

            <a href="#brief" class="gw-btn-secondary">
                Send your project brief
            </a>

        </div>

    </div>

</section>

<!-- =========================================================
     FOOTER
========================================================== -->
<footer class="gw-footer">

    <div class="gw-footer-inner">

        <div>
            <div class="gw-footer-brand">
                HMD <span>Publishing</span>
            </div>
            <p class="gw-footer-desc">
                Professional book writing and publishing services
                for authors at every stage.
            </p>
        </div>

        <div>
            <div class="gw-footer-head">Contact</div>
            <div class="gw-footer-line">info@hmdpublishing.com</div>
            <div class="gw-footer-line">UK: +44 7888 862764</div>
            <div class="gw-footer-line">US: +1 888 832 8969</div>
        </div>

        <div>
            <div class="gw-footer-head">Services</div>
            <a href="/services/book-writing" class="gw-footer-link">Ghostwriting</a>
            <a href="/services/editing" class="gw-footer-link">Editing</a>
            <a href="/services/book-cover-design" class="gw-footer-link">Book Cover Design</a>
            <a href="/services/publishing" class="gw-footer-link">Publishing</a>
        </div>

    </div>

    <div class="gw-footer-bottom">
        <span>© 2026 HMD Publishing Limited. All rights reserved.</span>
        <span>You keep 100% of your rights and royalties — always.</span>
    </div>

</footer>

    <style>
        /* ===== HMD Publishing - Book Writing & Ghostwriting Page ===== */

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #18181b;
            background: #fff;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button, input, select, textarea {
            font-family: inherit;
        }

        /* ===== TRUST ===== */
        .gw-trust {
            text-align: center;
            padding: 22px 20px 5px;
            font-size: 13px;
            color: #666;
        }

        .gw-stars {
            color: #00b67a;
            letter-spacing: 2px;
            font-size: 16px;
        }

        /* ===== HERO ===== */
        .gw-hero {
            max-width: 1150px;
            margin: auto;
            padding: 65px 5% 70px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 65px;
            align-items: center;
        }

        .gw-hero-eyebrow {
            display: inline-block;
            background: #f1f5ff;
            color: #2563eb;
            padding: 7px 12px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .8px;
            margin-bottom: 18px;
        }

        .gw-h1 {
            margin: 0 0 20px;
            font-size: 52px;
            line-height: 1.06;
            letter-spacing: -2.8px;
            font-weight: 800;
            color: #111827;
        }

        .gw-h1 span {
            color: #2563eb;
        }

        .gw-hero-text {
            color: #666;
            font-size: 17px;
            line-height: 1.7;
            max-width: 650px;
            margin-bottom: 27px;
        }

        .gw-hero-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .gw-btn-primary {
            background: #111;
            color: #fff;
            padding: 13px 21px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid #111;
            transition: .2s;
        }

        .gw-btn-primary:hover {
            background: #333;
        }

        .gw-btn-secondary {
            background: #fff;
            color: #222;
            padding: 13px 21px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid #d8d8d8;
            transition: .2s;
        }

        .gw-btn-secondary:hover {
            border-color: #111;
        }

        /* HERO VISUAL */
        .gw-hero-card {
            position: relative;
            min-height: 400px;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(145deg, #101828, #243b64 48%, #111827);
            box-shadow: 0 25px 60px rgba(0,0,0,.16);
        }

        .gw-hero-glow {
            position: absolute;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(96,165,250,.5), transparent 70%);
            top: -80px;
            right: -50px;
        }

        .gw-hero-book {
            position: absolute;
            width: 215px;
            height: 300px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) rotate(-6deg);
            background: linear-gradient(135deg, #dbeafe, #ffffff);
            border-radius: 4px;
            box-shadow: -25px 25px 45px rgba(0,0,0,.3);
        }

        .gw-hero-book::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(37,99,235,.9), rgba(30,64,175,.2));
            opacity: .65;
        }

        .gw-book-title {
            position: absolute;
            z-index: 2;
            left: 25px;
            right: 25px;
            top: 55px;
            color: #111827;
            font-size: 24px;
            font-weight: 800;
            line-height: 1.1;
            text-align: center;
        }

        .gw-book-subtitle {
            position: absolute;
            z-index: 2;
            left: 25px;
            right: 25px;
            bottom: 45px;
            text-align: center;
            color: #374151;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        /* ===== QUICK STATS ===== */
        .gw-quick-stats {
            max-width: 1050px;
            margin: 0 auto 70px;
            padding: 0 5%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-top: 1px solid #e7e7e7;
            border-bottom: 1px solid #e7e7e7;
        }

        .gw-quick-stat {
            padding: 23px 12px;
            text-align: center;
            border-right: 1px solid #e7e7e7;
        }

        .gw-quick-stat:last-child {
            border-right: 0;
        }

        .gw-quick-number {
            font-size: 24px;
            font-weight: 800;
        }

        .gw-quick-label {
            color: #777;
            font-size: 12px;
        }

        /* ===== PROJECT FIT ===== */
        .gw-fit-section {
            background: #f7f8fa;
            padding: 80px 5%;
        }

        .gw-fit-wrapper {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 55px;
            align-items: start;
        }

        .gw-eyebrow {
            color: #2563eb;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .gw-eyebrow-blue {
            color: #60a5fa;
        }

        .gw-h2 {
            margin: 0 0 12px;
            font-size: 37px;
            line-height: 1.12;
            letter-spacing: -1.5px;
            font-weight: 800;
            color: #111827;
        }

        .gw-fit-intro p,
        .gw-section-heading p {
            color: #717171;
            font-size: 14px;
            line-height: 1.7;
        }

        .gw-fit-intro p {
            margin-bottom: 25px;
        }

        .gw-fit-points {
            display: grid;
            gap: 12px;
        }

        .gw-fit-point {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            font-size: 13px;
            color: #555;
        }

        .gw-check {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #e8f0ff;
            color: #2563eb;
            font-size: 11px;
            font-weight: 800;
        }

        /* FORM */
        .gw-brief-form {
            background: #fff;
            border: 1px solid #e3e3e3;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 12px 35px rgba(0,0,0,.05);
        }

        .gw-form-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .gw-form-subtitle {
            font-size: 12px;
            color: #777;
            margin-bottom: 22px;
        }

        .gw-form-group {
            margin-bottom: 16px;
        }

        .gw-form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 7px;
            color: #333;
        }

        .gw-form-control {
            width: 100%;
            height: 45px;
            border: 1px solid #d3d3d3;
            border-radius: 6px;
            padding: 0 12px;
            outline: none;
            font-size: 13px;
            background: #fff;
            transition: .2s;
            font-family: inherit;
        }

        .gw-textarea {
            height: 120px;
            padding: 12px;
            resize: vertical;
        }

        .gw-form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.08);
        }

        .gw-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .gw-counter {
            text-align: right;
            font-size: 10px;
            color: #999;
            margin-top: 4px;
        }

        .gw-form-button {
            width: 100%;
            height: 47px;
            border: 0;
            border-radius: 7px;
            background: #111;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
            font-family: inherit;
        }

        .gw-form-button:hover {
            background: #333;
        }

        .gw-form-note {
            text-align: center;
            color: #888;
            font-size: 10px;
            margin-top: 12px;
        }

        /* ===== SECTION COMMON ===== */
        .gw-section {
            padding: 85px 5%;
        }

        .gw-container {
            max-width: 1100px;
            margin: auto;
        }

        .gw-section-heading {
            max-width: 700px;
            margin-bottom: 42px;
        }

        .gw-section-heading.gw-center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .gw-section-heading p {
            font-size: 14px;
        }

        /* ===== WHAT GHOSTWRITING IS ===== */
        .gw-ghostwriting-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .gw-info-box {
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 26px;
            background: #fff;
        }

        .gw-info-box h3 {
            font-size: 19px;
            margin: 0 0 10px;
        }

        .gw-info-box p {
            color: #707070;
            font-size: 13px;
            line-height: 1.75;
        }

        .gw-info-box ul {
            margin-top: 17px;
            padding-left: 19px;
        }

        .gw-info-box li {
            color: #666;
            font-size: 13px;
            margin-bottom: 9px;
        }

        /* ===== BEFORE YOU START ===== */
        .gw-before-section {
            background: #fafafa;
        }

        .gw-before-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .gw-before-card {
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 10px;
            padding: 23px;
        }

        .gw-before-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eef3ff;
            color: #2563eb;
            font-size: 17px;
            margin-bottom: 15px;
        }

        .gw-before-card h3 {
            font-size: 16px;
            margin: 0 0 7px;
        }

        .gw-before-card p {
            font-size: 12px;
            color: #737373;
            line-height: 1.7;
            margin: 0;
        }

        /* ===== PROCESS ===== */
        .gw-process-section {
            background: #111;
            color: #fff;
            padding: 85px 5%;
        }

        .gw-process-heading {
            max-width: 800px;
        }

        .gw-process-heading h2 {
            color: #fff;
        }

        .gw-process-heading p {
            color: #aaa;
            font-size: 14px;
            max-width: 650px;
            line-height: 1.7;
            margin: 0 0 42px;
        }

        .gw-process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .gw-process-card {
            background: #181818;
            border: 1px solid #303030;
            border-radius: 11px;
            padding: 25px;
        }

        .gw-process-number {
            color: #777;
            font-size: 11px;
            margin-bottom: 27px;
        }

        .gw-process-card h3 {
            font-size: 17px;
            margin: 0 0 9px;
            color: #fff;
        }

        .gw-process-card p {
            color: #bbb;
            font-size: 12px;
            line-height: 1.7;
            margin: 0;
        }

        /* ===== PACKAGES ===== */
        .gw-packages-section {
            background: #fafafa;
        }

        .gw-scope-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
        }

        .gw-package {
            border: 1px solid #dedede;
            border-radius: 12px;
            padding: 27px;
            position: relative;
            background: #fff;
            transition: .25s;
        }

        .gw-package:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(0,0,0,.08);
        }

        .gw-package.gw-popular {
            border: 2px solid #111;
        }

        .gw-popular-badge {
            position: absolute;
            top: -12px;
            left: 20px;
            background: #111;
            color: #fff;
            border-radius: 50px;
            padding: 5px 11px;
            font-size: 10px;
            font-weight: 700;
        }

        .gw-package-label {
            font-size: 10px;
            color: #888;
            text-transform: uppercase;
            letter-spacing: .8px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .gw-package h3 {
            font-size: 20px;
            margin: 0 0 8px;
        }

        .gw-package-price {
            font-size: 34px;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 3px;
        }

        .gw-package-words {
            color: #666;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .gw-package ul {
            list-style: none;
            margin: 0 0 25px;
            padding: 0;
        }

        .gw-package li {
            position: relative;
            padding-left: 20px;
            color: #5e5e5e;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .gw-package li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: 800;
        }

        .gw-package-btn {
            width: 100%;
            display: block;
            text-align: center;
            padding: 11px;
            border-radius: 6px;
            border: 1px solid #d5d5d5;
            font-size: 12px;
            font-weight: 700;
            box-sizing: border-box;
            transition: .2s;
        }

        .gw-popular .gw-package-btn,
        .gw-package-btn:hover {
            background: #111;
            border-color: #111;
            color: #fff;
        }

        /* ===== SEPARATE SERVICES ===== */
        .gw-separate-section {
            background: #f7f7f7;
        }

        .gw-separate-box {
            border: 1px solid #e2e2e2;
            border-radius: 14px;
            padding: 32px;
            background: #fff;
        }

        .gw-separate-box h3 {
            font-size: 22px;
            margin: 0 0 9px;
        }

        .gw-separate-box > p {
            color: #707070;
            font-size: 13px;
            margin: 0 0 25px;
        }

        .gw-separate-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .gw-separate-item {
            border: 1px solid #e8e8e8;
            border-radius: 8px;
            padding: 17px;
        }

        .gw-separate-item strong {
            display: block;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .gw-separate-item span {
            color: #777;
            font-size: 11px;
            line-height: 1.5;
        }

        /* ===== APPROVAL STAGES ===== */
        .gw-approval-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .gw-approval-card {
            border-top: 3px solid #111;
            background: #fafafa;
            padding: 25px;
            border-radius: 0 0 10px 10px;
        }

        .gw-approval-number {
            font-size: 30px;
            color: #d2d2d2;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .gw-approval-card h3 {
            font-size: 16px;
            margin: 0 0 9px;
        }

        .gw-approval-card p {
            color: #6e6e6e;
            font-size: 12px;
            line-height: 1.7;
            margin: 0;
        }

        /* ===== CONFIDENTIALITY NOTE ===== */
        .gw-note-section {
            padding-top: 10px;
            padding-bottom: 85px;
        }

        .gw-confidential-note {
            background: #f7f7f7;
            border: 1px solid #e3e3e3;
            border-radius: 12px;
            padding: 28px;
            text-align: center;
        }

        .gw-confidential-note p {
            max-width: 750px;
            margin: auto;
            color: #707070;
            font-size: 13px;
            line-height: 1.7;
        }

        /* ===== FAQ ===== */
        .gw-faq-section {
            background: #fafafa;
        }

        .gw-faq {
            max-width: 850px;
            margin: auto;
        }

        .gw-faq-item {
            border-bottom: 1px solid #ddd;
        }

        .gw-faq-question {
            width: 100%;
            padding: 20px 0;
            border: 0;
            background: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            color: #222;
        }

        .gw-faq-plus {
            font-size: 20px;
            font-weight: 300;
            transition: .2s;
        }

        .gw-faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height .3s ease, padding .3s ease;
            color: #6c6c6c;
            font-size: 13px;
            line-height: 1.75;
            padding: 0;
        }

        .gw-faq-item.gw-open .gw-faq-answer {
            max-height: 250px;
            padding: 0 0 20px;
        }

        .gw-faq-item.gw-open .gw-faq-plus {
            transform: rotate(45deg);
        }

        /* ===== RELATED SERVICES ===== */
        .gw-related-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gw-related-card {
            border: 1px solid #e4e4e4;
            border-radius: 10px;
            padding: 21px;
            transition: .2s;
        }

        .gw-related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0,0,0,.07);
        }

        .gw-related-price {
            color: #2563eb;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .gw-related-card h3 {
            font-size: 15px;
            margin: 0 0 7px;
        }

        .gw-related-card p {
            color: #777;
            font-size: 11px;
            line-height: 1.6;
            margin: 0 0 13px;
        }

        .gw-related-card a {
            color: #2563eb;
            font-size: 11px;
            font-weight: 700;
        }

        /* ===== CTA ===== */
        .gw-cta-section {
            padding: 20px 5% 90px;
        }

        .gw-cta {
            max-width: 1100px;
            margin: auto;
            background: linear-gradient(135deg, #eff4ff, #f7f8ff);
            border-radius: 18px;
            padding: 60px 35px;
            text-align: center;
        }

        .gw-cta h2 {
            margin: 0 0 13px;
            font-size: 38px;
            letter-spacing: -1.5px;
            line-height: 1.15;
            font-weight: 800;
            color: #111827;
        }

        .gw-cta p {
            max-width: 650px;
            margin: 0 auto 25px;
            color: #666;
            font-size: 14px;
            line-height: 1.7;
        }

        .gw-cta-buttons {
            justify-content: center;
        }

        /* ===== FOOTER ===== */
        .gw-footer {
            background: #080808;
            color: #aaa;
            padding: 50px 5% 25px;
        }

        .gw-footer-inner {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 45px;
        }

        .gw-footer-brand {
            color: #fff;
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .gw-footer-brand span {
            color: #2563eb;
        }

        .gw-footer-desc {
            max-width: 350px;
            line-height: 1.7;
            font-size: 13px;
            margin: 0;
        }

        .gw-footer-head {
            color: #fff;
            font-weight: 700;
            margin: 0 0 15px;
        }

        .gw-footer-line {
            margin-bottom: 8px;
            font-size: 13px;
        }

        .gw-footer-link {
            display: block;
            color: #aaa;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 8px;
            transition: color .2s;
        }

        .gw-footer-link:hover {
            color: #fff;
        }

        .gw-footer-bottom {
            max-width: 1200px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid #222;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1000px) {
            .gw-hero {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .gw-hero-card {
                max-width: 600px;
                width: 100%;
                margin: auto;
            }

            .gw-process-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gw-approval-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gw-related-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gw-separate-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
            .gw-quick-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .gw-quick-stat:nth-child(2) {
                border-right: 0;
            }

            .gw-quick-stat:nth-child(1),
            .gw-quick-stat:nth-child(2) {
                border-bottom: 1px solid #e7e7e7;
            }

            .gw-fit-wrapper {
                grid-template-columns: 1fr;
            }

            .gw-ghostwriting-grid {
                grid-template-columns: 1fr;
            }

            .gw-before-grid {
                grid-template-columns: 1fr 1fr;
            }

            .gw-scope-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 560px) {
            .gw-hero {
                padding-top: 45px;
            }

            .gw-h1 {
                font-size: 39px;
            }

            .gw-hero-text {
                font-size: 15px;
            }

            .gw-hero-card {
                min-height: 330px;
            }

            .gw-hero-book {
                width: 180px;
                height: 250px;
            }

            .gw-section,
            .gw-process-section,
            .gw-fit-section {
                padding-top: 65px;
                padding-bottom: 65px;
            }

            .gw-h2,
            .gw-cta h2,
            .gw-process-heading h2 {
                font-size: 30px;
            }

            .gw-form-row {
                grid-template-columns: 1fr;
            }

            .gw-before-grid,
            .gw-process-grid,
            .gw-approval-grid,
            .gw-separate-grid,
            .gw-related-grid,
            .gw-footer-inner {
                grid-template-columns: 1fr;
            }

            .gw-footer-bottom {
                flex-direction: column;
            }
        }
    </style>

    <script>
        function toggleFaq(button) {
            const item = button.parentElement;
            const allItems = document.querySelectorAll(".gw-faq-item");

            allItems.forEach(function(other) {
                if (other !== item) {
                    other.classList.remove("gw-open");
                }
            });

            item.classList.toggle("gw-open");
        }

        function updateCounter(textarea) {
            document.getElementById("counter").innerText = textarea.value.length;
        }

        function submitBrief(event) {
            event.preventDefault();

            const button = event.target.querySelector(".gw-form-button");
            const originalText = button.innerText;

            button.innerText = "Brief received ✓";
            button.style.background = "#16a34a";

            setTimeout(function() {
                button.innerText = originalText;
                button.style.background = "#111";
            }, 3000);
        }
    </script>

</body>
</html>