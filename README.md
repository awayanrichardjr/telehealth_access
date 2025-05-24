# NOTE

    THIS IS OBJECT ORIENTED
    PURE PHP
    FORM METHODS ONLY USING POST
    INDEX FILES HAS THE STYLESHEETS, FUNCTIONS, CONFIGURATION
    CREATING DATABASE, TABLES ARE IN ".db" FOLDER

## TELEHEALTH ACCESS: AN ONLINE CONSULTATION AND APPOINTMENT SYSTEM WITH PREDICTIVE ANALYTICS

### Final Objectives

    a. To create a user-friendly platform for virtual healthcare consultations.
    b. To integrate predictive analytics for efficient appointment scheduling.
    c. To evaluate the system's impact on wait times and patient satisfaction.
    d. To allow secure online payments for consultations.
    e. To enable doctors to access and view patients’ appointments and medical records securely.
    f. To implement a verification process that ensures only certified and licensed medical professionals can provide consultations through the system.
    g. To guide users on how to navigate the telehealth system.

## DATABASE

### LINK

    http://localhost/phpmyadmin/index.php?route=/database/structure&db=health

## System Roadmap

### 1. System Access and User Registration

    - Users can register for an account by selecting their role: Patient, Doctor.
    - Once registered, users can log in to the system based on their selected role.

### 2. Admin Management and User Monitoring

    - Admins can access and manage the entire system.
    - Admins can view and monitor all registered users and track their login activities.

### 3. Doctor Verification Process

    - Doctors are required to submit a verification form, including valid IDs, certificates, and their Google Space link.
    - Admins will review and verify the doctor's information.
    - Once verified, doctors gain full access to system features.

### 4. Appointment Setup and Booking

    - Verified doctors can create and manage appointment slots for consultations.
    - Patients can select a specialist and choose from verified doctors to book appointments.

### 5. Appointment Management

    - Doctors can view and manage incoming appointments from patients.
    - Admins can monitor all appointments created in the system and have the authority to manage or modify them.

### 6. Doctor-Patient Interaction

    - Doctors and patients can communicate through the system (e.g., via Google Space or integrated messaging).
    - After the consultation, doctors can close the appointment, marking it as completed.

### 7. Medical Records Integration

    - Closed appointments are automatically moved to the patient’s medical records.
    - Admins can access and oversee medical records for system administration and monitoring purposes.
