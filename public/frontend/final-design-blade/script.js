document.addEventListener('DOMContentLoaded', () => {
    const langID = document.getElementById('lang-id');
    const langEN = document.getElementById('lang-en');

    // Cek bahasa yang tersimpan di localStorage saat halaman dimuat
    const savedLang = localStorage.getItem('language') || 'en';
    setLanguage(savedLang);

    langID.addEventListener('click', (event) => {
        event.preventDefault();
        setLanguage('id');
    });

    langEN.addEventListener('click', (event) => {
        event.preventDefault();
        setLanguage('en');
    });

    // Fungsi untuk mengubah bahasa dan menyimpan pilihan di localStorage
    function setLanguage(lang) {
        localStorage.setItem('language', lang);
        fetch(`lang-${lang}.json`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Data fetched:', data);
                for (const key in data) {
                    if (data.hasOwnProperty(key)) {
                        const element = document.getElementById(key);
                        if (element) {
                            element.innerText = data[key];
                        }
                    }
                }
            })
            .catch(error => console.error('Error:', error));
    }
});
