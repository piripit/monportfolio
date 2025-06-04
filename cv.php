<?php
$current_page = 'cv';
$page_title = 'Mon CV';
include 'header.php';
?>

<style>
    .cv-container {
        padding: 2rem 0;
        background: var(--background-color);
        min-height: calc(100vh - var(--header-height) - 200px);
    }

    .cv-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .cv-header h1 {
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .cv-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .cv-viewer {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: 0 4px 20px var(--shadow-color);
        overflow: hidden;
        max-width: 900px;
        margin: 0 auto;
    }

    .pdf-embed {
        width: 100%;
        height: 80vh;
        min-height: 600px;
        border: none;
    }

    @media (max-width: 768px) {
        .cv-container {
            padding: 1rem;
        }

        .pdf-embed {
            height: 70vh;
            min-height: 500px;
        }

        .cv-actions {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<div class="cv-container">
    <div class="container">
        <div class="cv-header fade-in">
            <h1>Mon Curriculum Vitae</h1>
            <p class="section-description">
                Découvrez mon parcours, mes compétences et mes expériences
            </p>
        </div>

        <div class="cv-actions fade-in">
            <a href="fichier/Cv Fiatuwo.pdf" target="_blank" class="btn btn-primary">
                <i class="fas fa-external-link-alt"></i>
                Ouvrir dans un nouvel onglet
            </a>
            <a href="fichier/Cv Fiatuwo.pdf" download class="btn btn-outline">
                <i class="fas fa-download"></i>
                Télécharger le CV
            </a>
        </div>

        <div class="cv-viewer fade-in">
            <embed
                src="fichier/Cv Fiatuwo.pdf#toolbar=1&navpanes=1&scrollbar=1"
                type="application/pdf"
                class="pdf-embed"
                title="CV de Moriel FIATUWO">
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>