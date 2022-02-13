class SessionBanner {
    removeSuccessSessionBanner() {
        const successFlashId = document.getElementById("success-flash");
        successFlashId.classList.add("hidden");
    }

    removeErrorSessionBanner() {
        const errorFlashId = document.getElementById("error-flash");
        errorFlashId.classList.add("hidden");
    }

    removeValidationSessionBanner() {
        const validationFlashId = document.getElementById("validation-flash");
        validationFlashId.classList.add("hidden");
    }
}

const sessionBanner = new SessionBanner();
