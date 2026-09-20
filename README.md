# Brookline High School Innovation Fund

**Status: Under development**

A custom WordPress theme and content architecture for the [Brookline High School Innovation Fund](https://bhsinnovationfund.org/), a nonprofit organization supporting educational innovation.

**[Live Site](https://innovationfund.dreamhosters.com/)** · **[Repository](https://github.com/elisilk/innovation-fund)**

## Overview

This project involves rebuilding the Innovation Fund's website with a custom WordPress theme, structured content management, and a development workflow that supports local development and deployment to the live site.

The work is focused on improving the site's maintainability, responsive behavior, accessibility, content consistency, and editorial usability while preserving the organization's established visual direction.

The project is currently under development. The site is live, but the content model, frontend implementation, and supporting workflows will continue to evolve.

## Project Goals

The project is intended to:

- Provide a more consistent and responsive experience across screen sizes.
- Improve accessibility, including content structure, contrast, typography, and interaction behavior.
- Give the organization's staff member a simpler and more structured way to manage content.
- Separate content management concerns from frontend presentation.
- Establish a maintainable custom WordPress theme and development workflow.
- Support relationships between programs, educators, news, and events.

## Content Architecture

The site uses WordPress as its content management system, with structured fields and custom post types used to represent the organization's content.

The content model includes:

- **Programs:** Information about funded educational programs, including associated metadata and relationships.
- **Educators:** Information about educators connected to programs.
- **Events:** Information about the organization's community and fundraising events.
- **News:** Updates and stories managed through WordPress posts and structured fields.

The content model is designed around the needs of the organization and the staff member responsible for maintaining the site. The goal is to provide structured editing workflows without requiring the maintainer to manage layout and presentation details directly in page content.

## WordPress Implementation

The project uses a custom WordPress theme built with:

- PHP and WordPress theme templates
- Custom post types
- Structured custom fields
- Relationships between content types
- Vite-based asset development and builds
- CSS and custom properties
- A structured approach to reusable layout and styling

The theme is being developed as a custom implementation rather than as a child theme of an existing commercial theme.

## Frontend and Accessibility

The existing site's visual direction is being preserved in broad terms, while the implementation is being refined to address issues such as:

- Responsive layout behavior
- Small or difficult-to-read text
- Contrast and visual consistency
- Heading structure and content hierarchy
- Content presentation across screen sizes
- Editorial consistency

The project is under active development, and accessibility improvements will continue to be evaluated as the theme and content structure evolve.

## Development and Deployment Workflow

The theme is developed locally and maintained in a GitHub repository.

The current workflow uses:

1. Local development of the WordPress theme.
2. Vite and pnpm for asset development and builds.
3. GitHub for version control.
4. GitHub Actions for automated build and deployment-related tasks.
5. Deployment of the built theme to the live WordPress installation.

This workflow allows changes to be developed and reviewed locally before the built theme is deployed to the live site.

## Current Status and Future Work

The website is live, but the project is not yet considered complete.

Areas for continued development include:

- Refining the content model and editorial workflows.
- Continuing responsive and accessibility improvements.
- Reviewing templates and reusable theme components.
- Establishing a more systematic quality-assurance process.
- Documenting architectural decisions and content relationships.
- Expanding automated checks and testing where appropriate.
- Collecting before-and-after evidence of significant improvements.

The implementation and documentation will continue to develop alongside the organization's content and operational needs.

## Development Environment

The project uses:

- WordPress
- PHP
- Vite
- pnpm
- CSS
- Git and GitHub
- GitHub Actions
- Structured custom fields
- Custom post types

## Links

- **Live site:** https://innovationfund.dreamhosters.com/
- **Repository:** https://github.com/elisilk/innovation-fund
