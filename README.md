# Developer Portfolio – Multilanguage One Page Website

This project is a **reusable developer portfolio website** built as a one-page application, designed to be easily customized and reused by other developers.

It is the same portfolio structure I personally use, but with **generic placeholder data** (e.g. “John Doe”), sample images, and demo content, intended as a starting point or reference implementation.

## Overview

The website is a **single-page layout** with smooth section navigation and a strong focus on user experience, performance, and maintainability.

Sections included:
- Home
- About
- Skills
- Portfolio
- Contact

Navigation between sections uses smooth scrolling and visual indicators to clearly show the current section.

## Key Features

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

## Technologies Used
- PHP
- JavaScript
- HTML5
- CSS3
- Flexbox & Grid
- Responsive design
- UX-focused animations

## Live Demo
Developer Portfolio  
[View live demo](https://portfolio.for.devs.pablogaray.com.ar/index.php?side=es)

## Author
**Pablo Garay**  
[Personal website](https://pablogaray.com.ar)
