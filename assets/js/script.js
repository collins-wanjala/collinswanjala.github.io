// Mobile Navigation Toggle
document.addEventListener("DOMContentLoaded", () => {
  const navToggle = document.querySelector(".nav-toggle")
  const navMenu = document.querySelector(".nav-menu")

  if (navToggle && navMenu) {
    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active")
      navToggle.classList.toggle("active")
    })
  }

  // Smooth scrolling for anchor links
  const links = document.querySelectorAll('a[href^="#"]')
  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })

  // Form validation
  const contactForm = document.querySelector("form")
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      const inputs = this.querySelectorAll("input[required], textarea[required]")
      let isValid = true

      inputs.forEach((input) => {
        if (!input.value.trim()) {
          isValid = false
          input.style.borderColor = "#ef4444"
        } else {
          input.style.borderColor = "#e2e8f0"
        }
      })

      if (!isValid) {
        e.preventDefault()
        alert("Please fill in all required fields.")
      }
    })
  }

  // Add animation on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1"
        entry.target.style.transform = "translateY(0)"
      }
    })
  }, observerOptions)

  // Observe elements for animation
  const animateElements = document.querySelectorAll(".skill-item, .project-card, .blog-card")
  animateElements.forEach((el) => {
    el.style.opacity = "0"
    el.style.transform = "translateY(20px)"
    el.style.transition = "opacity 0.6s ease, transform 0.6s ease"
    observer.observe(el)
  })
})

// Add active class to current navigation item
function setActiveNavItem() {
  const currentPage = window.location.pathname.split("/").pop() || "index.php"
  const navLinks = document.querySelectorAll(".nav-menu a")

  navLinks.forEach((link) => {
    const href = link.getAttribute("href")
    if (href === currentPage || (currentPage === "" && href === "index.php")) {
      link.classList.add("active")
    }
  })
}

// Call on page load
document.addEventListener("DOMContentLoaded", setActiveNavItem)

    // Optional: fade out success message after 5 seconds
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) alert.style.opacity = 0;
    }, 5000);
