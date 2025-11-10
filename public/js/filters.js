// Filtrage dynamique des articles sans rechargement de page
document.addEventListener('DOMContentLoaded', function() {
    const filtersSection = document.querySelector('.filters-section');
    const articlesGrid = document.querySelector('.articles-grid');
    const articlesSection = document.querySelector('.articles-section .container');
    const paginationContainer = document.querySelector('.pagination');
    
    if (!filtersSection || !articlesGrid) {
        return; // Pas de filtres sur cette page
    }
    
    let currentFilters = {
        category: new URLSearchParams(window.location.search).get('category') || '',
        region: new URLSearchParams(window.location.search).get('region') || '',
        page: parseInt(new URLSearchParams(window.location.search).get('page')) || 1
    };
    
    // Intercepter les clics sur les boutons de filtre
    filtersSection.addEventListener('click', function(e) {
        const filterBtn = e.target.closest('.filter-btn');
        if (!filterBtn) return;
        
        e.preventDefault();
        
        // Extraire les paramètres de l'URL du bouton
        const url = new URL(filterBtn.href);
        const newCategory = url.searchParams.get('category') || '';
        const newRegion = url.searchParams.get('region') || '';
        
        // Mettre à jour les filtres
        currentFilters.category = newCategory;
        currentFilters.region = newRegion;
        currentFilters.page = 1; // Reset à la page 1
        
        // Charger les articles
        loadArticles();
    });
    
    // Intercepter les clics sur la pagination
    document.addEventListener('click', function(e) {
        const paginationLink = e.target.closest('.pagination-link');
        if (!paginationLink) return;
        
        e.preventDefault();
        
        const url = new URL(paginationLink.href);
        currentFilters.page = parseInt(url.searchParams.get('page')) || 1;
        
        loadArticles();
        
        // Scroll en douceur vers le haut de la section articles
        articlesSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    
    // Intercepter les clics sur "Réinitialiser tous les filtres"
    document.addEventListener('click', function(e) {
        const clearBtn = e.target.closest('.clear-filters');
        if (!clearBtn) return;
        
        e.preventDefault();
        
        currentFilters = { category: '', region: '', page: 1 };
        loadArticles();
    });
    
    // Intercepter les clics sur les badges de suppression de filtre
    document.addEventListener('click', function(e) {
        const removeBtn = e.target.closest('.remove-filter');
        if (!removeBtn) return;
        
        e.preventDefault();
        
        const url = new URL(removeBtn.href);
        currentFilters.category = url.searchParams.get('category') || '';
        currentFilters.region = url.searchParams.get('region') || '';
        currentFilters.page = 1;
        
        loadArticles();
    });
    
    function loadArticles() {
        // Afficher un indicateur de chargement
        showLoadingState();
        
        // Construire l'URL de l'API
        const params = new URLSearchParams();
        if (currentFilters.category) params.set('category', currentFilters.category);
        if (currentFilters.region) params.set('region', currentFilters.region);
        params.set('page', currentFilters.page);
        
        // Requête AJAX
        fetch(`/api/articles?${params.toString()}`)
            .then(response => response.json())
            .then(data => {
                // Mettre à jour les articles
                updateArticlesGrid(data.articles);
                
                // Mettre à jour la pagination
                updatePagination(data.currentPage, data.totalPages);
                
                // Mettre à jour l'URL sans recharger
                updateURL();
                
                // Mettre à jour les états actifs des filtres
                updateFilterStates();
                
                // Mettre à jour les filtres actifs
                updateActiveFilters();
                
                // Cacher le loading
                hideLoadingState();
            })
            .catch(error => {
                console.error('Erreur lors du chargement des articles:', error);
                hideLoadingState();
                showError();
            });
    }
    
    function showLoadingState() {
        articlesGrid.style.opacity = '0.5';
        articlesGrid.style.pointerEvents = 'none';
        articlesSection.classList.add('loading');
        
        // Ajouter un spinner si pas déjà présent
        if (!document.querySelector('.loading-spinner')) {
            const spinner = document.createElement('div');
            spinner.className = 'loading-spinner';
            spinner.innerHTML = '<div class="spinner"></div>';
            articlesSection.insertBefore(spinner, articlesGrid);
        }
    }
    
    function hideLoadingState() {
        articlesGrid.style.opacity = '1';
        articlesGrid.style.pointerEvents = 'auto';
        articlesSection.classList.remove('loading');
        
        const spinner = document.querySelector('.loading-spinner');
        if (spinner) {
            spinner.remove();
        }
    }
    
    function updateArticlesGrid(articles) {
        if (articles.length === 0) {
            articlesGrid.innerHTML = '<div class="no-articles"><p>Aucun article trouvé pour ces filtres.</p></div>';
            return;
        }
        
        articlesGrid.innerHTML = articles.map(article => `
            <article class="article-card">
                <a href="/article/${article.slug}" class="article-link">
                    <div class="article-image">
                        ${article.imageUrl 
                            ? `<img src="${article.imageUrl}" alt="${article.title}" loading="lazy">`
                            : '<div class="article-image-placeholder">🏰</div>'
                        }
                        <div class="article-overlay">
                            <span class="read-more">Lire l'article →</span>
                        </div>
                    </div>
                    <div class="article-content">
                        ${article.location 
                            ? `<span class="article-location">📍 ${article.location}</span>` 
                            : ''
                        }
                        <h2 class="article-title">${article.title}</h2>
                        <p class="article-excerpt">${article.excerpt}</p>
                        <div class="article-meta">
                            <span class="article-date">${article.createdAt}</span>
                            <span class="article-author">Par ${article.authorName}</span>
                        </div>
                    </div>
                </a>
            </article>
        `).join('');
    }
    
    function updatePagination(currentPage, totalPages) {
        if (totalPages <= 1) {
            if (paginationContainer) {
                paginationContainer.style.display = 'none';
            }
            return;
        }
        
        if (!paginationContainer) return;
        
        paginationContainer.style.display = 'flex';
        
        let html = '';
        
        // Bouton Précédent
        if (currentPage > 1) {
            html += `<a href="?page=${currentPage - 1}" class="pagination-link">← Précédent</a>`;
        }
        
        // Numéros de page
        for (let page = 1; page <= totalPages; page++) {
            if (page === currentPage) {
                html += `<span class="pagination-current">${page}</span>`;
            } else {
                html += `<a href="?page=${page}" class="pagination-link">${page}</a>`;
            }
        }
        
        // Bouton Suivant
        if (currentPage < totalPages) {
            html += `<a href="?page=${currentPage + 1}" class="pagination-link">Suivant →</a>`;
        }
        
        paginationContainer.innerHTML = html;
    }
    
    function updateURL() {
        const params = new URLSearchParams();
        if (currentFilters.category) params.set('category', currentFilters.category);
        if (currentFilters.region) params.set('region', currentFilters.region);
        if (currentFilters.page > 1) params.set('page', currentFilters.page);
        
        const newURL = params.toString() ? `?${params.toString()}` : '/';
        window.history.pushState({}, '', newURL);
    }
    
    function updateFilterStates() {
        // Retirer tous les états actifs
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Ajouter l'état actif aux filtres sélectionnés
        document.querySelectorAll('.filter-btn').forEach(btn => {
            const url = new URL(btn.href);
            const btnCategory = url.searchParams.get('category') || '';
            const btnRegion = url.searchParams.get('region') || '';
            
            if (btnCategory === currentFilters.category && btnRegion === currentFilters.region) {
                btn.classList.add('active');
            }
        });
    }
    
    function updateActiveFilters() {
        const activeFiltersDiv = document.querySelector('.active-filters');
        
        if (!currentFilters.category && !currentFilters.region) {
            if (activeFiltersDiv) {
                activeFiltersDiv.style.display = 'none';
            }
            return;
        }
        
        if (!activeFiltersDiv) return;
        
        activeFiltersDiv.style.display = 'flex';
        
        let html = '<span class="active-filters-label">Filtres actifs :</span>';
        
        if (currentFilters.category) {
            html += `
                <span class="active-filter-badge">
                    ${capitalizeFirst(currentFilters.category)}
                    <a href="?region=${currentFilters.region}" class="remove-filter">×</a>
                </span>
            `;
        }
        
        if (currentFilters.region) {
            html += `
                <span class="active-filter-badge">
                    ${currentFilters.region}
                    <a href="?category=${currentFilters.category}" class="remove-filter">×</a>
                </span>
            `;
        }
        
        html += '<a href="/" class="clear-filters">Réinitialiser tous les filtres</a>';
        
        activeFiltersDiv.innerHTML = html;
    }
    
    function capitalizeFirst(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    
    function showError() {
        articlesGrid.innerHTML = `
            <div class="error-message">
                <p>❌ Une erreur s'est produite lors du chargement des articles.</p>
                <button onclick="location.reload()" class="btn">Recharger la page</button>
            </div>
        `;
    }
});

