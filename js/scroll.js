 
        // Get the SVG elements
        const progressBar = document.getElementById('progress-bar');
        const percentageText = document.getElementById('percentage');
        const shape = document.querySelector(".shape"); 
        // Function to calculate and update scroll progress
        function updateScrollProgress() {
            // Get the scroll position and total document height
            const scrollPosition = window.scrollY || window.pageYOffset;
            const documentHeight = document.documentElement.scrollHeight - window.innerHeight;

            // Calculate scroll percentage
            const scrollPercentage = (scrollPosition / documentHeight) * 100;

            // Calculate stroke-dashoffset based on the scroll percentage
            const offset = 314 - (314 * (scrollPercentage / 100));

            // Update the SVG's stroke-dashoffset to visually represent the scroll progress
            progressBar.style.strokeDashoffset = offset;

            // Update the text to show the percentage with the '%' symbol
            var b = percentageText.textContent = `${Math.round(scrollPercentage)}%`;
            shape.style.left= `${Math.round(scrollPercentage)}%`
            shape.style.transition = "0.8s"
            if (scrollPercentage <= 33) {
                // shape.style.transform = "rotateX(60deg)";  // Red for 0% - 33%
                alert("a")
            } else(
                alert("jkjkj")

            )
        
            console.log(b)

        }

        // Event listener to update scroll progress on scroll
        window.addEventListener('scroll', updateScrollProgress);

        // Initial call to set the correct progress on page load
        updateScrollProgress();
     
