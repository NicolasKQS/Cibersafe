import './bootstrap';

const togglePassword = () => {
    const toggle = document.querySelector('[data-toggle-password]');
    const input = document.querySelector('#password');
    if (!(toggle instanceof HTMLButtonElement) || !(input instanceof HTMLInputElement)) return;

    toggle.addEventListener('click', () => {
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        toggle.textContent = isPassword ? 'Ocultar' : 'Ver';
    });
};

const lockSubmit = () => {
    const form = document.querySelector('[data-login-form]');
    const submit = document.querySelector('[data-login-submit]');
    if (!(form instanceof HTMLFormElement) || !(submit instanceof HTMLButtonElement)) return;

    form.addEventListener('submit', () => {
        submit.disabled = true;
        submit.classList.add('opacity-80', 'cursor-not-allowed');
        submit.textContent = 'Verificando…';
    });
};

togglePassword();
lockSubmit();
