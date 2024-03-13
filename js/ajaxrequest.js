jQuery(document).ready(function($) {
    const router_url = 'weatherlogic.php';

    $('#weatherForm').submit(function(e) {
        e.preventDefault();
        let city = $('#cityId').val().trim();

        if (city === '') {
            $('#weatherInfo').html('');
            alert('Please enter a city name');
        } else {
            $.ajax({
                url: router_url,
                type: 'POST',
                dataType: 'json',
                data: {city: city},
                success: function(response) {
                    if(response.error) {
                        $('#weatherInfo').html(`<p class="text-danger">${response.error}</p>`);
                    } else {
                    $('#weatherInfo').html(`
                        <p>City: ${response.city}, ${response.region}/${response.country}</p>
                        <p>Local Time: ${response.localTime}</p>
                        <p>Temperature: ${response.temperature}</p>
                        <p>Weather Condition: ${response.weatherCondition}</p>
                    `);
                    }
                },
                error: function() {
                    alert('Please try again');
                    
                }
            });
        }
    });
});