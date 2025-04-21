<!DOCTYPE html>
<html>
<head>
    <title>Clash Royale Meta Deck Stats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Most Used Cards</h1>
    <canvas id="cardChart"></canvas>

    <script>
    fetch('fetch_decks.php')
        .then(response => response.json())
        .then(data => {
            // Replace this part with real parsing logic once you have real data
            const cardNames = ["Miner", "Poison", "Phoenix", "Log"];
            const usageCounts = [12, 10, 8, 7];

            const ctx = document.getElementById('cardChart');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: cardNames,
                    datasets: [{
                        label: 'Card Frequency in Meta Decks',
                        data: usageCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)'
                    }]
                }
            });
        })
        .catch(err => {
            console.error('Error:', err);
        });
    </script>
</body>
</html>
