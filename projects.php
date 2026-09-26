<?php
$pageTitle = "Projects - Emil Ivanov";
include __DIR__ . "/includes/header.php";
?>
<section class="page-intro">
	<p class="section-title">Selected work</p>
	<h1 class="page-title">Things I've built.</h1>
	<p class="page-lede">A selection of web projects built with a balance of thoughtful interfaces and dependable technology.</p>
</section>

<section class="project-grid">
	<article class="project-card">
		<div class="project-visual">Portfolio</div>
		<p class="project-meta">PHP / CSS / UI design</p>
		<h2>Personal portfolio</h2>
		<p>A flexible personal site for presenting selected work, skills, and a clear way to get in touch.</p>
		<a class="text-link" href="/portfolio/index.php">View project</a>
	</article>
	<article class="project-card">
		<div class="project-visual">Web app</div>
		<p class="project-meta">JavaScript / API / responsive design</p>
		<h2>Interactive experience</h2>
		<p>A focused application concept designed around simple interactions and an easy-to-scan interface.</p>
		<a class="text-link" href="/portfolio/about.php">Ask about the project</a>
	</article>
</section>
<?php include __DIR__ . "/includes/footer.php"; ?>
