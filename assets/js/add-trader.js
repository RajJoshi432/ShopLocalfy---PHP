// assets/js/add-trader.js

// ── Discard Modal ─────────────────────────────────
function openDiscard() {
  document.getElementById('discardModal').classList.add('active');
}

function closeDiscard() {
  document.getElementById('discardModal').classList.remove('active');
}

// Close modal when clicking outside of it
document.addEventListener('click', function (e) {
  const modal = document.getElementById('discardModal');
  if (modal && modal.classList.contains('active')) {
    if (e.target === modal) {
      closeDiscard();
    }
  }
});