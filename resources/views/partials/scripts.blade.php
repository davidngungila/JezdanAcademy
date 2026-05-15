// ─── DATE ───
const todayDateEl = document.getElementById('todayDate');
if (todayDateEl) {
    todayDateEl.textContent = new Date().toLocaleDateString('en-TZ',{weekday:'long',year:'numeric',month:'long',day:'numeric'});
}

// ─── SIDEBAR ───
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('sidebarOverlay').style.display = document.getElementById('sidebar').classList.contains('open')?'block':'none';
}
function closeSidebar(){
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('sidebarOverlay').style.display='none';
}

// ─── LOADER ───
function showLoader(){const l=document.getElementById('topLoader');if(l){l.style.width='0';l.style.display='block';setTimeout(()=>l.style.width='80%',50);}}
function hideLoader(){const l=document.getElementById('topLoader');if(l){l.style.width='100%';setTimeout(()=>{l.style.width='0';l.style.display='none';},400);}}

// ─── THEME ───
let dark = false;
function toggleTheme() {
    dark = !dark;
    document.documentElement.setAttribute('data-theme', dark?'dark':'light');
    const themeIcon = document.getElementById('themeIcon');
    if (themeIcon) themeIcon.className = dark?'fa-solid fa-sun':'fa-solid fa-moon';
    const t2 = document.getElementById('darkModeToggle2');
    if(t2) t2.checked = dark;
}

// ─── MODAL ───
function showModal(id){
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add('open');
        if(id==='quizModal') startQuiz();
    }
}
function closeModal(id){
    const modal = document.getElementById(id);
    if (modal) modal.classList.remove('open');
}
document.querySelectorAll('.modal-overlay').forEach(o=>o.addEventListener('click',function(e){if(e.target===this)this.classList.remove('open');}));

// ─── TOAST ───
function showToast(msg, icon='fa-circle-info') {
    const t = document.createElement('div');
    t.className='toast';
    t.innerHTML=`<i class="fa-solid ${icon}"></i><span>${msg}</span>`;
    document.body.appendChild(t);
    setTimeout(()=>{t.style.animation='slideIn .3s ease reverse';setTimeout(()=>t.remove(),300);},3000);
}

// ─── NAVIGATION (Blade-friendly version) ───
// In a real Laravel app, these would be separate routes.
// For this design task, we can simulate page switching or just use standard links.
function navigateTo(url) {
    showLoader();
    window.location.href = url;
}
