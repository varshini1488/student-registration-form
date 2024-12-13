function validateForm() {
    // Get form elements
    const firstName = document.getElementById('first_name').value.trim();
    const lastName = document.getElementById('last_name').value.trim();
    const sem = document.getElementById('sem').value;
    const section = document.getElementById('section').value.trim();
    const college = document.getElementById('college').value.trim();
    const dob = document.getElementById('dob').value.trim();
    const email = document.getElementById('email').value.trim();
    const gender = document.getElementById('gender').value;
    const interestedDomain = document.getElementById('interested_domain').value;

    // Check for required fields
    if (!firstName || !lastName || !sem || !section || !college || !dob || !email || !gender || !interestedDomain) {
        alert("Please fill in all required fields.");
        return false; // Prevent form submission
    }

    // Simple email validation
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false; // Prevent form submission
    }

    // If all validations pass, the form will be submitted
    return true;
}
