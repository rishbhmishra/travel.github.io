<script type="text/javascript">
    // Javascript for responsive Nav Bar
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });
    </script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>