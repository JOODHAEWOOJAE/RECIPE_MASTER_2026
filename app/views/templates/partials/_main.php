<!-- Main -->
<!-- ... (reste du code précédent) ... -->

<!-- Main -->
<div class="container mx-auto flex flex-wrap pt-4 pb-12 text-gray-800">
    <!-- Filters -->
    <?php include '../app/views/templates/partials/_aside.php'; ?>

    <!-- Main content -->
    <main class="w-full md:w-3/4 p-3">
        <?php echo $content; ?>
    </main>
</div>