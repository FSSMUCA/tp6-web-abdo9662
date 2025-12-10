const form = document.getElementById('calcForm');
const numberA = document.getElementById('numberA');
const numberB = document.getElementById('numberB');
const operation = document.getElementById('operation');
const errorMsg = document.getElementById('errorMsg');
const historyList = document.getElementById('historyList');
const phpLink = document.getElementById('phpPageLink');

let history = [];

form.addEventListener('submit', function(e) {
    e.preventDefault();
    errorMsg.textContent = '';

    const a = parseFloat(numberA.value);
    const b = parseFloat(numberB.value);
    const op = operation.value;

    if (isNaN(a) || isNaN(b)) {
        errorMsg.textContent = 'Please enter valid numbers.';
        return;
    }
    if (op === '/' && b === 0) {
        errorMsg.textContent = 'Division by zero is not allowed.';
        return;
    }

    let result;
    switch(op) {
        case '+': result = a + b; break;
        case '-': result = a - b; break;
        case '*': result = a * b; break;
        case '/': result = a / b; break;
    }

    const operationString = `${a} ${op} ${b} = ${result}`;
    history.push(operationString);
    updateHistory();

    phpLink.href = `info.php?result=${encodeURIComponent(result)}`;
});

function updateHistory() {
    historyList.innerHTML = '';
    history.forEach(item => {
        const li = document.createElement('li');
        li.textContent = item;
        historyList.appendChild(li);
    });
}
