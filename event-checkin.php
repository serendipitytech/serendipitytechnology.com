<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- SEO Meta Tags -->
  <title>Event Check-In App | Free Event Registration Software | Serendipity Technology</title>
  <meta name="description" content="Streamline event check-in with our free, easy-to-use event registration software. Real-time multi-device check-in, offline support, instant attendee search. Perfect for galas, conferences, and nonprofit events." />
  <meta name="keywords" content="event check-in app, free event check-in, event registration software, event management, gala check-in, conference registration, nonprofit events" />
  
  <!-- Open Graph / Social Media -->
  <meta property="og:title" content="Event Check-In App | Streamline Your Event Registration" />
  <meta property="og:description" content="Say goodbye to paper sign-in sheets and expensive per-attendee fees. Check in attendees in seconds with our powerful, easy-to-use event check-in app." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://serendipitytechnology.com/event-checkin.php" />
  
  <!-- Your custom styles -->
  <link rel="stylesheet" href="css/concierge_style.css">

  <!-- AOS animations -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      AOS.init({
        once: true,
        duration: 800
      });
    });
  </script>
  
  <style>
    /* Event Check-In specific styles */
    .hero-checkin {
      background: linear-gradient(135deg, #00a2e8 0%, #0077b6 100%);
      padding: 5rem 1rem;
      text-align: center;
      color: white;
      position: relative;
      overflow: hidden;
    }
    
    .hero-checkin::before {
      content: "";
      position: absolute;
      top: -50%;
      right: -10%;
      width: 500px;
      height: 500px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 50%;
      z-index: 0;
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
      margin: 0 auto;
    }
    
    .feature-icon {
      width: 60px;
      height: 60px;
      margin: 0 auto 1rem;
      background: linear-gradient(135deg, #f16522, #ff8c42);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
    }
    
    .step-number {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, #00a2e8, #0077b6);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0 auto 1rem;
    }
    
    .pricing-card {
      border: 2px solid #e5e5e5;
      transition: all 0.3s ease;
    }
    
    .pricing-card:hover {
      border-color: #f16522;
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    
    .pricing-card.featured {
      border-color: #f16522;
      box-shadow: 0 8px 20px rgba(241, 101, 34, 0.2);
    }
    
    .testimonial-card {
      background: linear-gradient(135deg, #fafafa, #ffffff);
      border-left: 4px solid #f16522;
      padding: 1.5rem;
      margin: 1rem 0;
      border-radius: 8px;
    }
    
    .problem-section {
      background: linear-gradient(135deg, #fff5f0, #ffffff);
      padding: 3rem 1rem;
    }
    
    .cta-section {
      background: linear-gradient(135deg, #f16522, #ff8c42);
      color: white;
      padding: 3rem 1rem;
      text-align: center;
    }
    
    .use-case-badge {
      display: inline-block;
      background: #f16522;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      margin: 0.25rem;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<!-- Sticky Navigation -->
<nav id="scrollNav">
  <div class="scroll-nav-inner">
    <a href="index.html">
      <img src="img/logo_sm.png" alt="Serendipity Technology Logo" class="scroll-logo" />
    </a>
    <span class="scroll-title">Event Check-In</span>
    <button class="scroll-chat-btn" onclick="openModal()" aria-label="Get Started">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 12.5C21 14.9853 18.9853 17 16.5 17H13L7.5 21V17H6.5C4.01472 17 2 14.9853 2 12.5V8.5C2 6.01472 4.01472 4 6.5 4H16.5C18.9853 4 21 6.01472 21 8.5V12.5Z" />
      </svg>
    </button>
  </div>
</nav>

<!-- Hero Section -->
<header class="hero-checkin">
  <div class="hero-content" data-aos="fade-up">
    <h1 class="text-5xl font-bold mb-4">Check In Attendees in Seconds</h1>
    <p class="text-xl mb-6">The easiest way to manage event check-in — no paper, no hassle, no expensive per-attendee fees.</p>
    <div class="flex gap-4 justify-center flex-wrap">
      <button onclick="openModal()" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105">
        Request a Demo
      </button>
      <a href="#features" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-3 px-8 rounded-lg transition">
        Learn More
      </a>
    </div>
  </div>
</header>

<!-- Problem Statement Section -->
<section class="problem-section">
  <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold mb-4 text-gray-800">Tired of Paper Sign-In Sheets and Expensive Per-Attendee Fees?</h2>
    <p class="text-lg text-gray-700 mb-4">
      Running an event shouldn't mean dealing with messy clipboards, illegible handwriting, or paying $2-5 per attendee just to check people in. 
    </p>
    <p class="text-lg text-gray-700">
      <strong class="text-blue-600">There's a better way.</strong> Our Event Check-In app gives you professional, real-time attendee management without the hefty price tag.
    </p>
  </div>
</section>

<!-- Key Features Section -->
<section id="features">
  <h2 class="section-title" style="color: #f16522; display: block; text-align: center;">Powerful Features Built for Real Events</h2>
  <div class="cards-row" data-aos="fade-up">
    <div class="card">
      <div class="feature-icon">📱</div>
      <h3>Multi-Device Check-In</h3>
      <p>Multiple volunteers can check in attendees simultaneously from any phone, tablet, or computer. All data syncs in real-time.</p>
    </div>
    <div class="card">
      <div class="feature-icon">🔌</div>
      <h3>Offline Support</h3>
      <p>No WiFi? No problem. The app works offline and syncs automatically when connection is restored.</p>
    </div>
    <div class="card">
      <div class="feature-icon">⚡</div>
      <h3>Instant Search</h3>
      <p>Find any attendee in seconds with powerful real-time search. Type a name, company, or ticket number — results appear instantly.</p>
    </div>
    <div class="card">
      <div class="feature-icon">📊</div>
      <h3>Admin Dashboard</h3>
      <p>Monitor check-ins in real-time, view attendance reports, and export data — all from a clean, intuitive dashboard.</p>
    </div>
    <div class="card">
      <div class="feature-icon">💻</div>
      <h3>Works Anywhere</h3>
      <p>Web-based platform works on any device — iPhone, Android, tablets, laptops. No app download required.</p>
    </div>
    <div class="card">
      <div class="feature-icon">🎫</div>
      <h3>Bulk Upload</h3>
      <p>Import your attendee list from Excel, CSV, or your ticketing platform. Set up your event in minutes, not hours.</p>
    </div>
  </div>
</section>

<!-- How It Works Section -->
<section style="background-color: #fafafa;">
  <h2 class="section-title" style="display: block; text-align: center;">How It Works</h2>
  <div class="cards-row" data-aos="fade-up">
    <div class="card" style="max-width: 280px;">
      <div class="step-number">1</div>
      <h3>Create Your Event</h3>
      <p>Set up your event in minutes. Give it a name, set the date, and customize your settings.</p>
    </div>
    <div class="card" style="max-width: 280px;">
      <div class="step-number">2</div>
      <h3>Upload Attendee List</h3>
      <p>Import your guest list from a spreadsheet or ticketing platform. Bulk upload in seconds.</p>
    </div>
    <div class="card" style="max-width: 280px;">
      <div class="step-number">3</div>
      <h3>Check In & Go</h3>
      <p>Share the check-in link with your team. Search, tap, done. See real-time attendance from your dashboard.</p>
    </div>
  </div>
</section>

<!-- Use Cases Section -->
<section>
  <h2 class="section-title" style="color: #f16522; display: block; text-align: center;">Perfect For Every Event</h2>
  <div class="max-w-4xl mx-auto text-center mb-6" data-aos="fade-up">
    <p class="text-lg text-gray-700 mb-4">From intimate gatherings to large-scale conferences, our Event Check-In app scales to fit your needs.</p>
  </div>
  <div class="cards-row" data-aos="fade-up">
    <div class="card">
      <h3>🎭 Galas & Fundraisers</h3>
      <p>Make a great first impression with smooth, professional check-in. Track VIP arrivals and manage table assignments seamlessly.</p>
      <div class="mt-3">
        <span class="use-case-badge">Donor Tracking</span>
        <span class="use-case-badge">VIP Lists</span>
      </div>
    </div>
    <div class="card">
      <h3>🎤 Conferences & Summits</h3>
      <p>Handle hundreds of attendees with ease. Multiple check-in stations, session tracking, and real-time attendance reporting.</p>
      <div class="mt-3">
        <span class="use-case-badge">Multi-Day Events</span>
        <span class="use-case-badge">Session Tracking</span>
      </div>
    </div>
    <div class="card">
      <h3>🗳️ Political Events</h3>
      <p>Rally check-in, town halls, campaign events. Quick, reliable attendee tracking for volunteers and organizers.</p>
      <div class="mt-3">
        <span class="use-case-badge">Volunteer Coordination</span>
        <span class="use-case-badge">Quick Setup</span>
      </div>
    </div>
    <div class="card">
      <h3>🤝 Nonprofit Gatherings</h3>
      <p>Community meetings, member events, volunteer orientations. Simple tools that work without breaking the budget.</p>
      <div class="mt-3">
        <span class="use-case-badge">Member Management</span>
        <span class="use-case-badge">Affordable</span>
      </div>
    </div>
    <div class="card">
      <h3>🏘️ Community Meetings</h3>
      <p>Neighborhood associations, town halls, public forums. Easy attendance tracking for community engagement.</p>
      <div class="mt-3">
        <span class="use-case-badge">Public Access</span>
        <span class="use-case-badge">Simple Setup</span>
      </div>
    </div>
    <div class="card">
      <h3>🎓 Educational Events</h3>
      <p>Workshops, seminars, training sessions. Track attendance, manage registrations, and generate reports effortlessly.</p>
      <div class="mt-3">
        <span class="use-case-badge">Attendance Reports</span>
        <span class="use-case-badge">CEU Tracking</span>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section style="background-color: #fafafa;">
  <h2 class="section-title" style="display: block; text-align: center;">Simple, Transparent Pricing</h2>
  <div class="max-w-5xl mx-auto">
    <div class="cards-row" data-aos="fade-up">
      <div class="card pricing-card">
        <h3 class="text-2xl font-bold mb-2">Free Trial</h3>
        <div class="text-4xl font-bold mb-4" style="color: #00a2e8;">$0</div>
        <p class="mb-4">Perfect for testing the waters</p>
        <ul class="text-left text-sm space-y-2 mb-6">
          <li>✅ Up to 50 attendees</li>
          <li>✅ All core features</li>
          <li>✅ Real-time sync</li>
          <li>✅ Email support</li>
          <li>❌ Limited to 1 event</li>
        </ul>
        <button onclick="openModal()" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">
          Get Started Free
        </button>
      </div>
      
      <div class="card pricing-card featured">
        <div class="bg-orange-500 text-white text-sm font-bold px-3 py-1 rounded-full inline-block mb-2">MOST POPULAR</div>
        <h3 class="text-2xl font-bold mb-2">Pro</h3>
        <div class="text-4xl font-bold mb-4" style="color: #f16522;">Custom</div>
        <p class="mb-4">Built for your specific needs</p>
        <ul class="text-left text-sm space-y-2 mb-6">
          <li>✅ Unlimited attendees</li>
          <li>✅ Unlimited events</li>
          <li>✅ Advanced reporting</li>
          <li>✅ Custom branding</li>
          <li>✅ Priority support</li>
          <li>✅ White-label option</li>
        </ul>
        <button onclick="openModal()" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
          Contact Us for Pricing
        </button>
      </div>
      
      <div class="card pricing-card">
        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
        <div class="text-4xl font-bold mb-4" style="color: #00a2e8;">Let's Talk</div>
        <p class="mb-4">For large organizations</p>
        <ul class="text-left text-sm space-y-2 mb-6">
          <li>✅ Everything in Pro</li>
          <li>✅ Dedicated account manager</li>
          <li>✅ Custom integrations</li>
          <li>✅ SLA guarantee</li>
          <li>✅ Training & onboarding</li>
          <li>✅ API access</li>
        </ul>
        <button onclick="openModal()" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
          Request Demo
        </button>
      </div>
    </div>
    
    <div class="text-center mt-8 text-gray-600" data-aos="fade-up">
      <p class="text-lg">💡 <strong>No hidden fees. No per-attendee charges.</strong> Just straightforward pricing that works for your budget.</p>
    </div>
  </div>
</section>

<!-- Social Proof / Testimonials Section -->
<section>
  <h2 class="section-title" style="color: #f16522; display: block; text-align: center;">Trusted by Event Organizers</h2>
  <div class="max-w-4xl mx-auto" data-aos="fade-up">
    <div class="testimonial-card">
      <p class="text-lg italic mb-3">"We used this at our annual Black and Blue Gala and it was a game-changer. Check-in was smooth, fast, and professional. No more clipboards!"</p>
      <p class="font-bold">— Sarah M., Event Coordinator</p>
      <p class="text-sm text-gray-600">Black and Blue Gala, 450+ attendees</p>
    </div>
    
    <div class="testimonial-card">
      <p class="text-lg italic mb-3">"After years of struggling with paper lists and expensive registration platforms, this was exactly what we needed. Simple, affordable, and it just works."</p>
      <p class="font-bold">— Marcus T., Nonprofit Director</p>
      <p class="text-sm text-gray-600">Community Foundation Annual Meeting</p>
    </div>
    
    <div class="testimonial-card">
      <p class="text-lg italic mb-3">"The offline support saved us when the venue WiFi went down. Our volunteers kept checking people in without missing a beat. Highly recommend!"</p>
      <p class="font-bold">— Jennifer L., Conference Planner</p>
      <p class="text-sm text-gray-600">Regional Leadership Summit, 300+ attendees</p>
    </div>
    
    <div class="text-center mt-8 p-6 bg-blue-50 rounded-lg">
      <p class="text-xl font-bold mb-2" style="color: #00a2e8;">Join hundreds of event organizers who've simplified their check-in process.</p>
      <p class="text-gray-700">From 50-person fundraisers to 1,000+ person conferences, we've got you covered.</p>
    </div>
  </div>
</section>

<!-- Final CTA Section -->
<section class="cta-section">
  <div class="max-w-3xl mx-auto" data-aos="fade-up">
    <h2 class="text-4xl font-bold mb-4">Ready to Streamline Your Next Event?</h2>
    <p class="text-xl mb-6">Get started with a free trial or schedule a demo to see how easy event check-in can be.</p>
    <div class="flex gap-4 justify-center flex-wrap">
      <button onclick="openModal()" class="bg-white text-orange-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105">
        Request a Demo
      </button>
      <a href="mailto:troy@serendipitytech.net" class="bg-transparent border-2 border-white hover:bg-white hover:text-orange-600 text-white font-bold py-3 px-8 rounded-lg transition">
        Email Us
      </a>
    </div>
    <p class="mt-6 text-sm opacity-90">Questions? Reach out to <a href="mailto:troy@serendipitytech.net" class="underline font-bold">troy@serendipitytech.net</a></p>
  </div>
</section>

<!-- Footer -->
<footer class="mt-0 text-center text-sm text-gray-600 py-6" style="background: #f4f4f4;">
  <p class="mb-2">&copy; 2025 Serendipity Technology &bull; Troy Shimkus</p>
  <p>
    <a href="mailto:troy@serendipitytech.net" class="text-blue-500 hover:underline">troy@serendipitytech.net</a> &bull; 
    <a href="index.html" class="text-blue-500 hover:underline ml-2">Back to Home</a>
  </p>
</footer>

<!-- Contact Modal -->
<div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-lg shadow-xl p-6 max-w-md w-full relative mx-4">
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-3xl leading-none">
      &times;
    </button>
    <h2 class="text-2xl font-semibold mb-4" style="color: #f16522;">Get Started with Event Check-In</h2>
    <form id="contactForm" action="contact_twilio.php" method="POST" target="formFrame" onsubmit="return formSent();" class="space-y-4 text-sm">
      <label class="block">
        <span class="text-gray-700 font-medium">Name: *</span>
        <input type="text" name="name" required class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2" />
      </label>
      <label class="block">
        <span class="text-gray-700 font-medium">Email: *</span>
        <input type="email" name="email" required class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2" />
      </label>
      <label class="block">
        <span class="text-gray-700 font-medium">Phone: *</span>
        <input type="tel" name="phone" id="phone" required 
               pattern="\d{10}" 
               maxlength="10"
               inputmode="numeric"
               class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2" 
               placeholder="10-digit number" />
      </label>
      <label class="block">
        <span class="text-gray-700 font-medium">Tell us about your event: *</span>
        <textarea name="need" required rows="4" class="mt-1 w-full rounded-md border border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2" placeholder="Event type, estimated attendees, date, etc."></textarea>
      </label>
      <div>
        <span class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact Method:</span>
        <div class="flex gap-4">
          <label class="flex items-center gap-2">
            <input type="radio" name="contact_method" value="email" class="accent-orange-500" checked>
            <span>Email</span>
          </label>
          <label class="flex items-center gap-2">
            <input type="radio" name="contact_method" value="sms" class="accent-orange-500">
            <span>Text/SMS</span>
          </label>
        </div>
      </div>
      <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-4 rounded-lg transition">
        Send Request
      </button>
    </form>
    <div id="formSuccess" class="text-green-600 font-semibold mt-4 text-center hidden">
      ✓ Thanks! We'll be in touch soon.
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
function openModal() {
  document.getElementById("contactModal").classList.remove("hidden");
}

function closeModal() {
  document.getElementById("contactModal").classList.add("hidden");
  document.getElementById("formSuccess").classList.add("hidden");
  document.getElementById("contactForm").reset();
}

function formSent() {
  const successMsg = document.getElementById("formSuccess");
  successMsg.classList.remove("hidden");
  
  setTimeout(() => {
    closeModal();
  }, 3000);

  return true;
}

// Sticky navigation
window.addEventListener("scroll", () => {
  const scrollNav = document.getElementById("scrollNav");
  if (window.scrollY > 100) {
    scrollNav.classList.add("visible");
  } else {
    scrollNav.classList.remove("visible");
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
</script>

<iframe name="formFrame" style="display: none;"></iframe>
</body>
</html>
