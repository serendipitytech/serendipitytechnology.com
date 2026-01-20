---
site: Serendipity Technology
url: https://serendipitytechnology.com
client: serendipity-tech
generated: 2026-01-20T01:23:32.217Z
version: 1.0.0
---

```markdown
# SITE-CONTEXT.md

## Site Overview
**Name:** Serendipity Technology  
**URL:** https://serendipitytechnology.com  
**Client:** serendipity-tech  
**Owner:** Troy Shimkus (troy@serendipitytech.net)

## Purpose and Audience
- **Purpose:** Business website for custom app development and technology solutions
- **Target Audience:** Small to medium businesses needing automation, integration, and custom software solutions
- **Primary Goal:** Lead generation through contact form submissions
- **Value Proposition:** Solving business pain points with creative, custom-built technology solutions

## Site Structure

### File Organization
```
/
├── index.html (single-page application)
├── css/
│   ├── concierge_style.css (primary custom styles)
│   ├── grid.css
│   ├── style.css
│   ├── ie.css
│   └── reset.css
├── img/ (contains logos, icons, and graphics)
└── .git/
```

### Page Structure (Single Page Layout)
1. **Sticky Navigation** (`#scrollNav`)
2. **Hero Header** (`#mainHeader`)
3. **Services Section** ("What We Do")
4. **Portfolio Section** ("Recent Projects")
5. **Footer**
6. **Contact Modal** (`#contactModal`)

## Key HTML Elements and Structure

### Navigation
- **ID:** `#scrollNav`
- **Behavior:** Appears on scroll (after 100px)
- **Components:**
  - Logo: `img/logo_sm.png`
  - Title: "Custom App Solutions"
  - Chat button with SVG icon
- **Classes:** `.scroll-nav-inner`, `.scroll-logo`, `.scroll-title`, `.scroll-chat-btn`

### Header/Hero Section
- **ID:** `#mainHeader`
- **Background:** Uses overlay class `.header-overlay`
- **Components:**
  - Main logo: `img/logo.png` (300px width)
  - H1: "Custom App Solutions"
  - Tagline: "Solving pain points with creativity and tech built just for you."
  - CTA button: "Let's Talk" (opens modal)

### Services Section ("What We Do")
- **Structure:** `.cards-row` containing multiple `.card` elements
- **Cards:**
  1. Automation (icon: `img/data_integration.svg`)
  2. Integration (icon: `img/integration.svg`)
  3. Insight (icon: `img/insight.svg`)
- **Layout:** Each card has `.img-frame` for icon containment

### Recent Projects Section
- **Title color:** `#f16522` (orange)
- **Layout:** Horizontal card layout with icons and descriptions
- **Icons used:**
  - `img/map-pin-plus.svg`
  - `img/maps-arrow-diagonal.svg`
  - `img/group.svg`
  - `img/reply-to-message.svg`
  - `img/multiple-pages-empty.svg`
  - `img/settings-profiles.svg`

### Contact Modal
- **ID:** `#contactModal`
- **Form ID:** `#contactForm`
- **Form action:** `contact_twilio.php` (targets hidden iframe `formFrame`)
- **Fields:**
  - Name (required, text)
  - Email (email type)
  - Phone (required, tel, 10-digit pattern)
  - Project description (required, textarea)
  - Contact preference (radio: email/SMS)
- **Success message ID:** `#formSuccess`

## Design Elements

### Color Scheme
- **Primary Orange:** `#f16522` (section titles, accents)
- **Primary Blue:** `bg-blue-500`, `hover:bg-blue-600` (buttons)
- **Text Colors:** White (hero), gray-600 (footer), gray-700 (form labels)
- **Focus Colors:** `focus:ring-orange-500`, `focus:border-orange-500`

### Typography
- **Framework:** Tailwind CSS utility classes
- **Header:** `text-4xl font-bold` (H1)
- **Body:** Standard Tailwind text sizing
- **Sections:** `.section-title` class for consistent heading styles

### Layout Framework
- **CSS Framework:** Tailwind CSS (CDN)
- **Custom CSS:** `concierge_style.css` for specialized styling
- **Grid System:** Custom `.cards-row` and `.card` classes
- **Responsive:** Uses Tailwind responsive utilities

## Key CSS Classes

### Custom Classes (likely in concierge_style.css)
- `.section-title` - Section headings
- `.cards-row` - Container for card layouts
- `.card` - Individual service/project cards
- `.img-frame` - Icon containers in service cards
- `.header-overlay` - Hero section styling
- `.scroll-nav-inner` - Navigation container
- `.scroll-logo`, `.scroll-title`, `.scroll-chat-btn` - Navigation components

### Tailwind Utility Patterns
- Spacing: `mb-4`, `mt-6`, `p-6`, `max-w-md`
- Layout: `flex`, `items-center`, `justify-center`, `fixed`, `inset-0`
- Colors: `bg-blue-500`, `text-white`, `text-gray-700`
- Interactive: `hover:bg-blue-600`, `focus:ring-orange-500`

## JavaScript Functionality

### Core Functions
- `openModal()` - Shows contact modal
- `closeModal()` - Hides modal and resets form
- `formSent()` - Handles form submission success
- Scroll listener for sticky navigation visibility

### External Libraries
- **AOS (Animate On Scroll):** v2.3.4 for animations
- **Configuration:** `once: true, duration: 800`

## Content Areas for Updates

### High-Priority Content Areas
1. **Hero Section:** Main headline and tagline
2. **Service Cards:** Descriptions and icons
3. **Recent Projects:** Project descriptions and examples
4. **Contact Information:** Email, form fields

### Asset Locations
- **Logos:** `img/logo.png` (main), `img/logo_sm.png` (nav)
- **Service Icons:** `img/data_integration.svg`, `img/integration.svg`, `img/insight.svg`
- **Project Icons:** Various SVG files in `img/` directory

## Special Features

### Form Handling
- **Backend:** PHP script (`contact_twilio.php`)
- **Method:** Hidden iframe submission to prevent page reload
- **Validation:** HTML5 validation + 10-digit phone pattern
- **UX:** Success message with auto-close after 3 seconds

### Scroll Behavior
- **Sticky Navigation:** Appears after 100px scroll
- **Smooth Transitions:** Handled via CSS (likely in concierge_style.css)

### Accessibility
- **ARIA Labels:** Chat button has `aria-label="Open Chat"`
- **Form Labels:** Proper label associations
- **Semantic HTML:** Proper heading hierarchy and section structure

## Technical Dependencies
- **Tailwind CSS:** CDN version for utility classes
- **AOS Library:** CDN for scroll animations
- **Modern Browser Features:** CSS Grid/Flexbox, ES6 JavaScript

## Maintenance Notes
- Single-page application - all content in `index.html`
- Primary styling in `concierge_style.css`
- Form submission requires `contact_twilio.php` backend
- Image assets should maintain consistent sizing and format (SVG preferred for icons)
- Modal system is self-contained with no external modal library
```


## Update: 2026-01-20T02:51:30.498Z

Moved Recent Projects section from bottom of page to top position, placing it between Hero Header and Services sections

## Recent Changes
- **Layout Update (2026-01-20):** Moved Recent Projects section from bottom of page to top position, now appearing between Hero Header and Services sections for better visibility and user engagement

