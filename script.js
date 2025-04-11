document.addEventListener('DOMContentLoaded', function() {
    // Form elements
    const form = document.getElementById('signupForm');
    const formStatus = document.getElementById('formStatus');
    const countrySelect = document.getElementById('country');
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmPassword');

    // Base API URL - replace with your actual API endpoint
    const API_BASE_URL = 'https://api.example.com/locations';

    // Fetch countries on page load
    fetchCountries();

    // Event listeners for cascading dropdowns
    countrySelect.addEventListener('change', function() {
        resetSelect(provinceSelect);
        resetSelect(citySelect);
        resetSelect(barangaySelect);
        
        if (this.value) {
            provinceSelect.disabled = false;
            fetchProvinces(this.value);
        } else {
            provinceSelect.disabled = true;
        }
    });

    provinceSelect.addEventListener('change', function() {
        resetSelect(citySelect);
        resetSelect(barangaySelect);
        
        if (this.value) {
            citySelect.disabled = false;
            fetchCities(countrySelect.value, this.value);
        } else {
            citySelect.disabled = true;
        }
    });

    citySelect.addEventListener('change', function() {
        resetSelect(barangaySelect);
        
        if (this.value) {
            barangaySelect.disabled = false;
            fetchBarangays(countrySelect.value, provinceSelect.value, this.value);
        } else {
            barangaySelect.disabled = true;
        }
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset form status
        formStatus.className = 'form-status';
        formStatus.style.display = 'none';
        formStatus.textContent = '';
        
        // Validate password match
        if (passwordField.value !== confirmPasswordField.value) {
            showFormError('Passwords do not match. Please try again.');
            return;
        }
        
        // Form data collection
        const formData = new FormData(form);
        const userData = {};
        
        for (const [key, value] of formData.entries()) {
            userData[key] = value;
        }
        
        // Submit form data to server (example)
        submitFormData(userData);
    });

    // API Functions
    function fetchCountries() {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries`)
            .then(countries => {
                populateSelect(countrySelect, countries);
            })
            .catch(error => {
                console.error('Error fetching countries:', error);
                showFormError('Unable to load countries. Please refresh the page.');
            });
    }

    function fetchProvinces(countryId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces`)
            .then(provinces => {
                populateSelect(provinceSelect, provinces);
            })
            .catch(error => {
                console.error('Error fetching provinces:', error);
                showFormError('Unable to load provinces. Please try again.');
            });
    }

    function fetchCities(countryId, provinceId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces/${provinceId}/cities`)
            .then(cities => {
                populateSelect(citySelect, cities);
            })
            .catch(error => {
                console.error('Error fetching cities:', error);
                showFormError('Unable to load cities. Please try again.');
            });
    }

    function fetchBarangays(countryId, provinceId, cityId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces/${provinceId}/cities/${cityId}/barangays`)
            .then(barangays => {
                populateSelect(barangaySelect, barangays);
            })
            .catch(error => {
                console.error('Error fetching barangays:', error);
                showFormError('Unable to load barangays. Please try again.');
            });
    }

    function submitFormData(userData) {
        // Simulate API call to submit form data
        fetch('https://api.example.com/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Registration failed. Please try again.');
            }
            return response.json();
        })
        .then(data => {
            showFormSuccess('Account created successfully! You will be redirected to login.');
            // Redirect or further actions here
            setTimeout(() => {
                // window.location.href = 'login.html';
                console.log('Redirecting to login page...');
            }, 3000);
        })
        .catch(error => {
            console.error('Error submitting form:', error);
            showFormError(error.message);
        });
    }

    // Helper Functions
    function populateSelect(selectElement, options) {
        options.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.value = option.id;
            optionElement.textContent = option.name;
            selectElement.appendChild(optionElement);
        });
    }

    function resetSelect(selectElement) {
        selectElement.innerHTML = '<option value="">Select an option</option>';
        selectElement.disabled = true;
    }

    function showFormError(message) {
        formStatus.textContent = message;
        formStatus.className = 'form-status error';
        formStatus.style.display = 'block';
    }

    function showFormSuccess(message) {
        formStatus.textContent = message;
        formStatus.className = 'form-status success';
        formStatus.style.display = 'block';
    }

    // Simulate API calls with sample data
    function simulateApiCall(url) {
        return new Promise((resolve, reject) => {
            console.log(`API Call to: ${url}`);
            
            // Sample data based on the endpoint
            setTimeout(() => {
                if (url.includes('/countries')) {
                    if (url === `${API_BASE_URL}/countries`) {
                        resolve([
                            { id: 'PH', name: 'Philippines' },
                            { id: 'US', name: 'United States' },
                            { id: 'JP', name: 'Japan' },
                            { id: 'SG', name: 'Singapore' },
                            { id: 'AU', name: 'Australia' }
                        ]);
                    } else if (url.includes('/provinces')) {
                        const countryId = url.split('/')[4];
                        if (countryId === 'PH') {
                            resolve([
                                { id: 'MNL', name: 'Metro Manila' },
                                { id: 'CEB', name: 'Cebu' },
                                { id: 'DAV', name: 'Davao' },
                                { id: 'ILO', name: 'Iloilo' }
                            ]);
                        } else if (countryId === 'US') {
                            resolve([
                                { id: 'CA', name: 'California' },
                                { id: 'NY', name: 'New York' },
                                { id: 'TX', name: 'Texas' },
                                { id: 'FL', name: 'Florida' }
                            ]);
                        } else {
                            resolve([{ id: 'DEMO', name: 'Demo Province' }]);
                        }
                    } else if (url.includes('/cities')) {
                        const provinceId = url.split('/')[6];
                        if (provinceId === 'MNL') {
                            resolve([
                                { id: 'MKT', name: 'Makati' },
                                { id: 'BGC', name: 'Taguig' },
                                { id: 'QZN', name: 'Quezon City' },
                                { id: 'MNL', name: 'Manila' }
                            ]);
                        } else {
                            resolve([
                                { id: 'CITY1', name: 'City 1' },
                                { id: 'CITY2', name: 'City 2' },
                                { id: 'CITY3', name: 'City 3' }
                            ]);
                        }
                    } else if (url.includes('/barangays')) {
                        resolve([
                            { id: 'BRG1', name: 'Barangay 1' },
                            { id: 'BRG2', name: 'Barangay 2' },
                            { id: 'BRG3', name: 'Barangay 3' },
                            { id: 'BRG4', name: 'Barangay 4' },
                            { id: 'BRG5', name: 'Barangay 5' }
                        ]);
                    }
                } else {
                    reject(new Error('Invalid API endpoint'));
                }
            }, 300); // Simulate network delay
        });
    }
});document.addEventListener('DOMContentLoaded', function() {
    // Form elements
    const form = document.getElementById('signupForm');
    const formStatus = document.getElementById('formStatus');
    const countrySelect = document.getElementById('country');
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmPassword');

    // Base API URL - replace with your actual API endpoint
    const API_BASE_URL = 'https://api.example.com/locations';

    // Fetch countries on page load
    fetchCountries();

    // Event listeners for cascading dropdowns
    countrySelect.addEventListener('change', function() {
        resetSelect(provinceSelect);
        resetSelect(citySelect);
        resetSelect(barangaySelect);
        
        if (this.value) {
            provinceSelect.disabled = false;
            fetchProvinces(this.value);
        } else {
            provinceSelect.disabled = true;
        }
    });

    provinceSelect.addEventListener('change', function() {
        resetSelect(citySelect);
        resetSelect(barangaySelect);
        
        if (this.value) {
            citySelect.disabled = false;
            fetchCities(countrySelect.value, this.value);
        } else {
            citySelect.disabled = true;
        }
    });

    citySelect.addEventListener('change', function() {
        resetSelect(barangaySelect);
        
        if (this.value) {
            barangaySelect.disabled = false;
            fetchBarangays(countrySelect.value, provinceSelect.value, this.value);
        } else {
            barangaySelect.disabled = true;
        }
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset form status
        formStatus.className = 'form-status';
        formStatus.style.display = 'none';
        formStatus.textContent = '';
        
        // Validate password match
        if (passwordField.value !== confirmPasswordField.value) {
            showFormError('Passwords do not match. Please try again.');
            return;
        }
        
        // Form data collection
        const formData = new FormData(form);
        const userData = {};
        
        for (const [key, value] of formData.entries()) {
            userData[key] = value;
        }
        
        // Submit form data to server (example)
        submitFormData(userData);
    });

    // API Functions
    function fetchCountries() {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries`)
            .then(countries => {
                populateSelect(countrySelect, countries);
            })
            .catch(error => {
                console.error('Error fetching countries:', error);
                showFormError('Unable to load countries. Please refresh the page.');
            });
    }

    function fetchProvinces(countryId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces`)
            .then(provinces => {
                populateSelect(provinceSelect, provinces);
            })
            .catch(error => {
                console.error('Error fetching provinces:', error);
                showFormError('Unable to load provinces. Please try again.');
            });
    }

    function fetchCities(countryId, provinceId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces/${provinceId}/cities`)
            .then(cities => {
                populateSelect(citySelect, cities);
            })
            .catch(error => {
                console.error('Error fetching cities:', error);
                showFormError('Unable to load cities. Please try again.');
            });
    }

    function fetchBarangays(countryId, provinceId, cityId) {
        // Simulate API call with sample data
        simulateApiCall(`${API_BASE_URL}/countries/${countryId}/provinces/${provinceId}/cities/${cityId}/barangays`)
            .then(barangays => {
                populateSelect(barangaySelect, barangays);
            })
            .catch(error => {
                console.error('Error fetching barangays:', error);
                showFormError('Unable to load barangays. Please try again.');
            });
    }

    function submitFormData(userData) {
        // Simulate API call to submit form data
        fetch('https://api.example.com/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(userData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Registration failed. Please try again.');
            }
            return response.json();
        })
        .then(data => {
            showFormSuccess('Account created successfully! You will be redirected to login.');
            // Redirect or further actions here
            setTimeout(() => {
                // window.location.href = 'login.html';
                console.log('Redirecting to login page...');
            }, 3000);
        })
        .catch(error => {
            console.error('Error submitting form:', error);
            showFormError(error.message);
        });
    }

    // Helper Functions
    function populateSelect(selectElement, options) {
        options.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.value = option.id;
            optionElement.textContent = option.name;
            selectElement.appendChild(optionElement);
        });
    }

    function resetSelect(selectElement) {
        selectElement.innerHTML = '<option value="">Select an option</option>';
        selectElement.disabled = true;
    }

    function showFormError(message) {
        formStatus.textContent = message;
        formStatus.className = 'form-status error';
        formStatus.style.display = 'block';
    }

    function showFormSuccess(message) {
        formStatus.textContent = message;
        formStatus.className = 'form-status success';
        formStatus.style.display = 'block';
    }

    // Simulate API calls with sample data
    function simulateApiCall(url) {
        return new Promise((resolve, reject) => {
            console.log(`API Call to: ${url}`);
            
            // Sample data based on the endpoint
            setTimeout(() => {
                if (url.includes('/countries')) {
                    if (url === `${API_BASE_URL}/countries`) {
                        resolve([
                            { id: 'PH', name: 'Philippines' },
                            { id: 'US', name: 'United States' },
                            { id: 'JP', name: 'Japan' },
                            { id: 'SG', name: 'Singapore' },
                            { id: 'AU', name: 'Australia' }
                        ]);
                    } else if (url.includes('/provinces')) {
                        const countryId = url.split('/')[4];
                        if (countryId === 'PH') {
                            resolve([
                                { id: 'MNL', name: 'Metro Manila' },
                                { id: 'CEB', name: 'Cebu' },
                                { id: 'DAV', name: 'Davao' },
                                { id: 'ILO', name: 'Iloilo' }
                            ]);
                        } else if (countryId === 'US') {
                            resolve([
                                { id: 'CA', name: 'California' },
                                { id: 'NY', name: 'New York' },
                                { id: 'TX', name: 'Texas' },
                                { id: 'FL', name: 'Florida' }
                            ]);
                        } else {
                            resolve([{ id: 'DEMO', name: 'Demo Province' }]);
                        }
                    } else if (url.includes('/cities')) {
                        const provinceId = url.split('/')[6];
                        if (provinceId === 'MNL') {
                            resolve([
                                { id: 'MKT', name: 'Makati' },
                                { id: 'BGC', name: 'Taguig' },
                                { id: 'QZN', name: 'Quezon City' },
                                { id: 'MNL', name: 'Manila' }
                            ]);
                        } else {
                            resolve([
                                { id: 'CITY1', name: 'City 1' },
                                { id: 'CITY2', name: 'City 2' },
                                { id: 'CITY3', name: 'City 3' }
                            ]);
                        }
                    } else if (url.includes('/barangays')) {
                        resolve([
                            { id: 'BRG1', name: 'Barangay 1' },
                            { id: 'BRG2', name: 'Barangay 2' },
                            { id: 'BRG3', name: 'Barangay 3' },
                            { id: 'BRG4', name: 'Barangay 4' },
                            { id: 'BRG5', name: 'Barangay 5' }
                        ]);
                    }
                } else {
                    reject(new Error('Invalid API endpoint'));
                }
            }, 300); // Simulate network delay
        });
    }
});