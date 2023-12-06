<h3>Driver Weekly Pay Calculator</h3>

    <label for="employeeId">Enter Employee ID:</label>
    <input type="text" id="employeeId" placeholder="Enter employee ID">
    <br>
    <button onclick="fillHours()">Fill Hours</button>
    <br>
    <label for="hoursWorked">Enter Hours Worked:</label>
    <input type="number" id="hoursWorked" placeholder="Enter hours">
    <button onclick="calculatePay()">Calculate Weekly Pay</button>

    <p id="result"></p>

    <script>

        const employeeHours = {
            '1': 8,
            '2': 11,
            '3': 6,
            '4': 17,
            '7': 5,

        };

        function fillHours() {
            const employeeIdInput = document.getElementById('employeeId');
            const hoursWorkedInput = document.getElementById('hoursWorked');

            const employeeId = employeeIdInput.value.trim();

            if (employeeHours[employeeId]) {
                hoursWorkedInput.value = employeeHours[employeeId];
            } else {
                alert("No predefined hours for the entered Employee ID.");
            }
        }

function calculateWeeklyPay(hoursWorked, employeeId) {
            const hourlyRate = 16;


            const predefinedHours = employeeHours[employeeId];
            const actualHours = predefinedHours || hoursWorked;

            return actualHours * hourlyRate;
        }

        function calculatePay() {
            const employeeIdInput = document.getElementById('employeeId');
            const hoursWorkedInput = document.getElementById('hoursWorked');
            const resultParagraph = document.getElementById('result');

            const employeeId = employeeIdInput.value.trim();
            const hoursWorked = parseFloat(hoursWorkedInput.value);

            if (employeeId === '' || isNaN(hoursWorked)) {
                resultParagraph.textContent = "Please enter valid information.";
            } else {
                const weeklyPay = calculateWeeklyPay(hoursWorked, employeeId);
                resultParagraph.textContent = `Weekly pay for Employee ${employeeId}: $${weeklyPay.toFixed(2)}`;
            }
        }
    </script>
