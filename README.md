# Hospital Management System Backend

This is the backend of a Hospital Management System built using Laravel. The system manages patients, doctors, appointments, medical tests, consultations, and more.

## Features

-   **Patient Registration**: Register new patients with their details.
-   **Doctor Management**: Manage doctors and their specializations.
-   **Appointment Scheduling**: Schedule appointments between patients and doctors.
-   **Insurance Planning**: Manage insurance details for patients.
-   **Consultations**: Record consultation notes between doctors and patients.
-   **Medical Tests**: Record and track medical tests for patients.
-   **Report Management**: Transfer reports between laboratories and doctors.
-   **Patient Admission**: Admit patients into rooms and manage their stay.

## Prerequisites

-   PHP >= 8.2.4
-   Composer
-   MySQL
<!-- -   Node.js and npm (optional, if using frontend with Vue.js or React) -->

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Mostafizur-Pro/hospital_management_backend.git
    cd hospital_management_backend
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Create and Configure the Environment File**

    ```bash
    cp .env.example .env
    ```

4. **Generate an Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations and Seeders**

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

## Configuration

-   Open the `.env` file and set the following variables according to your database configuration:

    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=hospital_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Usage

1. **Start the Laravel Development Server**

    ```bash
    php artisan serve
    ```

2. **Access the Application**

    Open your web browser and navigate to `http://127.0.0.1:8000`.

## Database Structure

-   doctors: Stores doctor information (name, specialization, phone, email, etc.).
-   patients: Stores patient information (name, email, phone, dob, address, etc.).
-   appointments: Stores appointment details between patients and doctors.
-   insurances: Stores insurance details for patients.
-   consultations: Stores consultation notes between doctors and patients.
-   medical_tests: Stores details of medical tests conducted on patients.
-   reports: Stores reports generated from medical tests.

## Seeders

-   DoctorSeeder: Seeds the doctors table.
-   PatientSeeder: Seeds the patients table.
-   AppointmentSeeder: Seeds the appointments table.
-   InsuranceSeeder: Seeds the insurances table.
-   ConsultationSeeder: Seeds the consultations table.
-   MedicalTestSeeder: Seeds the medical_tests table.

## API Endpoints

1. **Doctor Routes:**

    - GET /api/doctors: List all doctors.
    - POST /api/doctors: Add a new doctor.
    - GET /api/doctors/{id}: Get details of a specific doctor.
    - PUT /api/doctors/{id}: Update a doctor's information.
    - DELETE /api/doctors/{id}: Delete a doctor.e

2. **Patient Routes:**

    - GET /api/patients: List all patients.
    - POST /api/patients: Add a new patient.
    - GET /api/patients/{id}: Get details of a specific patient.
    - PUT /api/patients/{id}: Update a patient's information.
    - DELETE /api/patients/{id}: Delete a patient.

3. **Appointment Routes:**

    - GET /api/appointments: List all appointments.
    - POST /api/appointments: Schedule a new appointment.
    - GET /api/appointments/{id}: Get details of a specific appointment.
    - PUT /api/appointments/{id}: Update an appointment.
    - DELETE /api/appointments/{id}: Cancel an appointment.

4. **Insurance Routes:**

    - GET /api/insurances: List all insurances.
    - POST /api/insurances: Add new insurance.
    - GET /api/insurances/{id}: Get details of a specific insurance.
    - PUT /api/insurances/{id}: Update an insurance policy.
    - DELETE /api/insurances/{id}: Delete an insurance policy.

5. **Consultation Routes:**

    - GET /api/consultations: List all consultations.
    - POST /api/consultations: Add a new consultation.
    - GET /api/consultations/{id}: Get details of a specific consultation.
    - PUT /api/consultations/{id}: Update a consultation.
    - DELETE /api/consultations/{id}: Delete a consultation.

6. **Medical Routes:**

    - GET /api/medical-tests: List all medical tests.
    - POST /api/medical-tests: Add a new medical test.
    - GET /api/medical-tests/{id}: Get details of a specific medical test.
    - PUT /api/medical-tests/{id}: Update a medical test.
    - DELETE /api/medical-tests/{id}: Delete a medical test.

## Running the Application

To run the application, make sure you have the necessary dependencies installed and follow the usage instructions to start the development server. You can then access the application in your web browser.

## Testing

Run the application's tests using PHPUnit:

```bash
php artisan test
```


