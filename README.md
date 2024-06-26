# VITAP Grade Calculator

This web application calculates the GPA (Grade Point Average) for students based on their grades and credits. It allows users to select grades and credits for various subjects and then calculates the GPA dynamically. The application supports calculating both semester GPA and cumulative GPA (CGPA).

## Features

- Dynamic grade and credit selection.
- Real-time GPA calculation.
- Supports GPA calculation for any semester (`index.html`).
- Supports cumulative GPA calculation (`cgpa.html`).
- Responsive design for compatibility across different devices.
- Enhanced UI with overlay background images.

## Project Structure

- `index.html` - Main page for semester GPA calculation.
- `index.js` - JavaScript file for logic related to semester GPA calculation.
- `styles.css` - CSS file for styling `index.html`.
- `assets/` - Directory containing images and other assets used in the application.
- `cgpa.html` - Page for calculating cumulative GPA.
- `cgpa.js` - JavaScript file for logic related to cumulative GPA calculation.
- `cgpa.css` - CSS file for styling `cgpa.html`.

## Getting Started

### Prerequisites

To run this project, you need a modern web browser. No additional software or server is required.

### Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/vitap-grade-calculator.git

2. **Navigate to the Project Directory**
   ```bash
   cd vitap-grade-calculator
   
3. **Open the Pages**

   1. Open index.html for semester GPA calculation.
   2. Open cgpa.html for cumulative GPA calculation.
      
### Usage
   - **Semester GPA Calculation (index.html)**
      - Open index.html in a web browser.
      - Select grades and credits for each subject using the dropdown menus.
      - Click the "Calculate GPA" button to compute the GPA for the semester.
      - The GPA will be displayed on the page.
   - **Cumulative GPA Calculation (cgpa.html)**
      - Open cgpa.html in a web browser.
      - Enter details for each semester, including grades and credits.
      - Click the "Calculate CGPA" button to compute the cumulative GPA.
      - The cumulative GPA will be displayed on the page.
### Code Overview
   - **HTML Files**
      - index.html: Contains structure for semester GPA calculation.
      - cgpa.html: Contains structure for cumulative GPA calculation.
   - **CSS Files**
      - styles.css: Styles index.html.
      - cgpa.css: Styles cgpa.html.
   - **JavaScript Files**
      - index.js: Logic for GPA calculation in index.html.
      - cgpa.js: Logic for cumulative GPA calculation in cgpa.html.
         
### Contributing
- Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.
