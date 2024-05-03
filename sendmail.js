        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

     
            // Show loader
            let loader = document.getElementById('loader');
            let send_message = document.getElementById('send_message');
            loader.style.display = 'inline';
            send_message.style.display = 'none';

            // Disable the button
            let button = document.getElementById('submit');
            button.classList.add('muted');
            button.disabled = true;

            var formData = new FormData(event.target);

            fetch('send_email.php', {
                    method: 'POST',
                    body: formData
                })
               .then(response => response.json())
               .then(data => {
                    // Hide loader
                    loader.style.display = 'none';
                    send_message.style.display = 'inline';

                    // Enable the button
                    button.disabled = false;
                    button.classList.remove('muted');

                    // Display the SweetAlert based on the response
                    if (data.status === 'success') {
                        Swal.fire({
                            title: "Success!",
                            text: data.message,
                            icon: "success",
                            button: "OK",
                            className: "dark-mode"
                        }).then(() => {
                            // Clear form fields on success
                            document.getElementById('contactForm').reset();
                            loader.style.display = 'none';
                            send_message.style.display = 'inline';
                        });
                    } else if (data.status === 'error') {
                        Swal.fire({
                            title: "Error!",
                            text: data.message,
                            icon: "error",
                            button: "OK",
                            className: "dark-mode"
                        });
                    }
                })
               .catch(error => {
                    console.error('Error:', error);
                    // Show the loading state
                    button.innerText = 'Loading...';
                    button.disabled = true;

                    Swal.fire({
                        title: "Error!",
                        text: "Something went wrong. Please try again.",
                        icon: "error",
                        button: "OK",
                        className: "dark-mode"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Change the button text back to "Send Message"
                            send_message.innerText = 'Send Message';
                            button.disabled = false; // Re-enable the button
                            // Refresh the page
                            window.location.reload();
                        }
                    });
                });
        });