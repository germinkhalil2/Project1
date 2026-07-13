# Italia Through Time

**CSC 4370/6370 – Project 1**  
**Team Members:** Germin Khalil & Kobie Brown

---

# Project Overview

Italia Through Time is a PHP-based digital archive that explores Italy's rich cultural heritage through five major historical eras. Visitors can browse artifacts, search the collection, view a historical timeline, and submit questions or contributions through a contact form.

The project uses reusable PHP components, responsive web design, and semantic HTML to create a clean, museum-inspired experience without using JavaScript.

---

# Technologies Used

- PHP
- HTML5
- CSS3
- CSS Grid
- Flexbox
- Google Fonts
- Responsive Web Design

---

# Design Choices

The website was designed to resemble a museum and historical archive. The color palette, typography, and layout were chosen to create a clean, elegant, and timeless presentation of Italian cultural heritage while making the content easy to browse and read.

Google Fonts were selected to reinforce this design:

- **Cormorant Garamond** – Used for headings because of its classic and elegant appearance.
- **Source Serif 4** – Used for body text to improve readability while maintaining a traditional style.
- **IBM Plex Mono** – Used for catalog numbers, labels, and navigation elements to resemble museum inventory records and archival documentation.

---

# Features

- Homepage introducing the archive
- Artifact gallery with keyword search
- Category filtering
- Individual artifact detail pages
- Historical timeline
- Contact form with server-side validation
- Responsive layouts for mobile, tablet, and desktop
- Shared PHP header and footer
- Reusable artifact card component

---

# Technologies and PHP Concepts

This project demonstrates several PHP concepts including:

- PHP arrays
- PHP `require`
- `$_GET`
- `$_POST`
- `foreach` loops
- Conditional statements
- Functions
- Server-side validation
- `htmlspecialchars()`
- `filter_var()`

---

# Project Structure

```
Project1/
│
├── index.php
├── gallery.php
├── artifact.php
├── timeline.php
├── contact.php
├── README.md
│
├── css/
│   └── style.css
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── data.php
│   └── artifact-card.php
│
└── images/
    ├── artifacts/
    └── site/
```

---

# Pages

## Home (`index.php`)

- Hero section
- Introduction to the archive
- Featured artifacts
- Timeline preview

---

## Gallery (`gallery.php`)

Users can:

- Browse all artifacts
- Search by keyword
- Filter by category
- Open artifact detail pages

---

## Artifact Details (`artifact.php`)

Displays:

- Artifact image
- Description
- Historical era
- Related artifacts

If an invalid artifact ID is entered, the page displays a friendly error message instead of crashing.

---

## Timeline (`timeline.php`)

Displays the five historical eras of Italian history.

Each era includes:

- Historical description
- Date range
- Artifacts from that era
- Links to artifact pages

---

## Contact (`contact.php`)

The contact page includes:

- Name validation
- Email validation
- Message validation
- Error messages
- Success confirmation
- Server-side processing using `$_POST`

---

# Reusable Components

Shared components are stored inside the **includes** folder.

## header.php

Contains:

- HTML document head
- Navigation menu
- Google Fonts
- Stylesheet link
- Opening `<main>` tag

## footer.php

Contains:

- Footer information
- Navigation links
- Research sources
- Copyright
- Closing HTML tags

## data.php

Stores:

- Timeline data
- Artifact data
- Categories
- Helper functions

## artifact-card.php

Reusable component used to display artifact cards throughout the website.

---

# Responsive Design

The website is fully responsive.

Breakpoints include:

- Mobile: 1-column layouts
- Tablet (768px): 2-column layouts
- Desktop (1024px): 3-column layouts

The project uses both CSS Grid and Flexbox to create responsive layouts.

---

# Accessibility

Accessibility features include:

- Semantic HTML5 elements
- Keyboard navigation
- Skip-to-content link
- Visible keyboard focus indicators
- Form labels
- Responsive layouts
- Accessible color contrast

---

# Research Sources

- Official Italian Museum Websites  
  https://www.museiitaliani.it/

- UNESCO World Heritage Centre  
  https://whc.unesco.org/en/

- Encyclopaedia Britannica  
  https://www.britannica.com/

- History Reference Collections  
  https://www.history.ac.uk/library/collections/italian-history-collections

---

## Running the Project

This project is designed to run on a PHP-enabled web server such as the Georgia State CODD server.

Open:

index.php

through the web server to access the website.

# AI Disclosure

Artificial intelligence tools (ChatGPT and Claude) were used during the development of this project to assist with brainstorming, code generation, debugging, explanations of PHP and CSS concepts, improving code organization, and refining documentation.

All AI-generated suggestions were reviewed, tested, modified where necessary, and integrated into the project by the team. The team verified that all functionality worked correctly and understands the implementation, design decisions, PHP logic, HTML structure, and CSS used throughout the website.

---

# Future Improvements

Potential improvements include:

- Store contact form submissions in a database
- Add user authentication
- Expand the artifact collection
- Add additional search filters
- Include interactive maps of historical locations
- Improve accessibility with ARIA landmarks and additional screen reader enhancements

---

# License

This project was created for **CSC 4370/6370 Project 1** at Georgia State University and is intended for educational purposes only.