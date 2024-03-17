
    // Smooth scrolling functionality
    const content = document.getElementById('content');
    let scrollPos = 0;

    function handleScroll() {
      const scrollY = window.scrollY || window.pageYOffset;

      // Calculate the difference in scroll position
      const scrollDelta = scrollY - scrollPos;

      // Update the content position based on the scroll
      content.style.transform = `translateY(-${scrollY}px)`;

      // Store the new scroll position
      scrollPos = scrollY;
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
