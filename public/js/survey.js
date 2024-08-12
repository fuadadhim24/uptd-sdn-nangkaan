document.addEventListener('DOMContentLoaded', function () {
    let currentPage = 1;
    const totalPages = document.querySelectorAll('.page').length;

    const showPage = (pageNumber) => {
        document.querySelectorAll('.page').forEach(page => page.style.display = 'none');
        document.getElementById(`page-${pageNumber}`).style.display = 'block';
        document.getElementById('prev-button').style.display = pageNumber === 1 ? 'none' : 'inline-block';
        document.getElementById('next-button').style.display = pageNumber === totalPages ? 'none' : 'inline-block';
        document.getElementById('submit-button').style.display = pageNumber === totalPages ? 'inline-block' : 'none';
    };

    document.getElementById('prev-button').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    document.getElementById('next-button').addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    });

    document.getElementById('submit-button').addEventListener('click', () => {
        alert('Survey submitted!');
        setTimeout(() => {
            window.location.href = "survey"
        }, 100);
    });

    showPage(currentPage);

    // Timer code
    const timeDisplay = document.getElementById('time-display');
    let startTime = Date.now();

    setInterval(() => {
        const elapsed = Date.now() - startTime;
        const minutes = Math.floor(elapsed / 60000);
        const seconds = Math.floor((elapsed % 60000) / 1000);
        timeDisplay.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    }, 1000);
});
