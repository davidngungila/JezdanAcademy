// ─── DATE ───
const todayDateEl = document.getElementById('todayDate');
if (todayDateEl) {
    todayDateEl.textContent = new Date().toLocaleDateString('en-TZ',{weekday:'long',year:'numeric',month:'long',day:'numeric'});
}

// ─── SIDEBAR ───
function toggleSidebar(){
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    if (sidebar && overlay) {
        sidebar.classList.toggle('open');
        overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
    }
}
function closeSidebar(){
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    if (sidebar && overlay) {
        sidebar.classList.remove('open');
        overlay.style.display = 'none';
    }
}

// ─── LOADER ───
function showLoader(){const l=document.getElementById('topLoader');if(l){l.style.width='0';l.style.display='block';setTimeout(()=>l.style.width='80%',50);}}
function hideLoader(){const l=document.getElementById('topLoader');if(l){l.style.width='100%';setTimeout(()=>{l.style.width='0';l.style.display='none';},400);}}

// ─── THEME ───
let dark = localStorage.getItem('theme') === 'dark';
function applyTheme() {
    document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
    const themeIcon = document.getElementById('themeIcon');
    if (themeIcon) themeIcon.className = dark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
    const t2 = document.getElementById('darkModeToggle2');
    if (t2) t2.checked = dark;
}
function toggleTheme() {
    dark = !dark;
    localStorage.setItem('theme', dark ? 'dark' : 'light');
    applyTheme();
}
// Apply on load
applyTheme();

// ─── MODAL ───
function showModal(id){
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add('open');
        document.body.style.overflow = 'hidden'; // Prevent scroll
        if(id==='quizModal' && typeof startQuiz === 'function') startQuiz();
    }
}
function closeModal(id){
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.remove('open');
        document.body.style.overflow = ''; // Restore scroll
    }
}
// Global close on overlay click
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal-overlay')) {
        e.target.classList.remove('open');
        document.body.style.overflow = '';
    }
});

// ─── TOAST ───
function showToast(msg, icon='fa-circle-info') {
    const t = document.createElement('div');
    t.className='toast';
    t.innerHTML=`<i class="fa-solid ${icon}"></i><span>${msg}</span>`;
    document.body.appendChild(t);
    setTimeout(()=>{
        t.style.animation='slideIn .3s ease reverse';
        setTimeout(()=>t.remove(),300);
    },3000);
}

// ─── NAVIGATION ───
function navigateTo(url) {
    showLoader();
    window.location.href = url;
}
