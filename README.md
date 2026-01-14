# Developer Portfolio – Multilanguage One Page Website

This project is a **reusable developer portfolio website** built as a one-page application, designed to be easily customized and reused by other developers.

It is the same portfolio structure I personally use, but with **generic placeholder data** (e.g. “John Doe”), sample images, and demo content, intended as a starting point or reference implementation.

## Project Overview

**Role:** Frontend / Full Stack Developer

This project is a **multi-language personal portfolio website** designed as a reusable base for developers.

It was built as a one-page application with smooth navigation, strong visual focus, and careful UX decisions.  
The site supports **Spanish and English**, includes animated language switching, persistent form state, and dynamic content updates.

The project focuses on:
- User experience and visual feedback
- Clean, maintainable CSS architecture
- Frontend state handling without frameworks
- Practical JavaScript for real-world interactions

This repository represents a thoughtfully designed portfolio template focused on real-world usability and continuous improvement, rather than a simple demo.

## Key Features
The following features highlight the main functional and UX aspects of the project:

### Single-Page Structure
- Single-page layout with clearly defined sections:
	- Home
	- About
	- Skills
	- Portfolio
	- Contact
- Smooth scrolling between sections
- Clear visual feedback indicating the active section

### Multilanguage Support (ES / EN)
- Language switcher with animated 180° flip effect
- Visual attention cue on first visit
- Full site content switches language (titles, cards, forms, navigation)
- Form data is preserved when switching languages
- Smooth layout adjustment to handle different word lengths between Spanish and English

### UX & UI Details
- Sticky navigation bar with active section indicator
- Minimalist navigation using animated underline (`::after`)
- Responsive layout with multiple breakpoints
- Smooth scrolling and transitions across the entire site
- Optimized layout behavior when zooming or resizing

### Contact Form
- Minimalist design
- Multi-layer validation:
	- HTML5
	- JavaScript
	- PHP
- Form data persistence on language switch
- Automatic scroll to form feedback after submission
- Centralized message handling

### CSS Architecture
- CSS variables for theme management
- Section-based CSS structure for high maintainability
- Clear separation of concerns
- Cross-browser compatibility considerations
- Grid and Flexbox layouts where appropriate

Example of theme variables:
```css
:root {
  --theme-color: #191c32;
  --primary-color: aquamarine;
  --secundary-color: #F7C331;
  --text-color-inverse: black;
  --text-color: white;
  --navbar-shallow-color: #e5e5e5;
}
```

## Navigation Highlight

The navigation menu uses `::after` pseudo-elements to display a dynamic underline indicating the active section:

```css
.menu a::after {
  content: "";
  background-color: var(--primary-color);
  position: absolute;
  left: 0;
  top: calc(100% + 4px);
  width: 100%;
  height: 4px;
  border-radius: 20px;
  opacity: 0;
  transition: opacity 0.3s;
}
```
## Portfolio Section
- Card-based layout
- Project image preview
- Links to:
	- Live demo
	- GitHub repository

## CV Download
- Language-aware CV download
- Separate PDF files for Spanish and English
- Opens in a new tab for recruiter-friendly access

## Footer
- Dynamic year calculation using PHP
- Automatic copyright update
- Author information
- Personal tribute section (dynamic year counter)

## Planned Improvements
The following features are planned and not yet implemented:

- Custom CAPTCHA system for contact form:
	- Simple math challenge (e.g. `2 + [image]`)
	- Image displays a random number (1–10)
	- Images identified by filename
	- Random image selection per request
	- Server-side validation before email delivery

This approach avoids third-party services while adding an extra layer of spam protection.

## Technologies Used
- PHP
- JavaScript
- HTML5
- CSS3
- Flexbox & Grid
- Responsive design
- UX-focused animations

## Lessons Learned

- UX details (animations, transitions, visual feedback) significantly improve perceived quality.
- Supporting multiple languages affects layout, spacing, and navigation behavior.
- Preserving form state during UI changes improves usability and user trust.
- CSS architecture and variables greatly simplify long-term maintenance.
- Small interactive details can communicate professionalism without heavy frameworks.
- Cross-browser compatibility requires explicit handling of CSS visibility and animations.
- Designing for recruiters means optimizing for clarity, speed, and minimal friction.

## Live Demo
Developer Portfolio  
[View live demo](https://portfolio.for.devs.pablogaray.com.ar/index.php?side=es)

## Author
**Pablo Garay**  
[Personal website](https://pablogaray.com.ar)
