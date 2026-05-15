<!-- QUIZ MODAL -->
<div class="modal-overlay" id="quizModal">
  <div class="modal modal-lg">
    <div class="modal-header">
      <h3><i class="fa-solid fa-clipboard-question" style="color:var(--accent)"></i> CompTIA Security+ Mock Exam</h3>
      <div class="modal-close" onclick="closeModal('quizModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="modal-body">
      <div class="quiz-progress">
        <span style="font-size:13px;color:var(--text-muted)">Question <span id="qNum">1</span> of 5</span>
        <div class="quiz-timer"><i class="fa-regular fa-clock"></i><span id="quizTimer">10:00</span></div>
        <span class="badge badge-orange" id="quizScore">Score: 0/0</span>
      </div>
      <div class="progress-bar mb-20"><div class="progress-fill" id="quizProgressBar" style="width:20%"></div></div>
      <div class="quiz-q" id="quizQuestion"></div>
      <div class="quiz-options" id="quizOptions"></div>
      <div id="quizExplain" style="margin-top:16px;display:none"></div>
    </div>
    <div class="modal-footer">
      <div style="font-size:13px;color:var(--text-muted);margin-right:auto"><i class="fa-solid fa-shield-halved" style="color:var(--warning)"></i> Anti-cheating active</div>
      <button class="btn btn-outline" onclick="closeModal('quizModal')">Exit</button>
      <button class="btn btn-primary" onclick="nextQuestion()" id="nextQBtn" disabled><i class="fa-solid fa-arrow-right"></i> Next</button>
    </div>
  </div>
</div>

<!-- CERTIFICATE MODAL -->
<div class="modal-overlay" id="certModal">
  <div class="modal modal-lg">
    <div class="modal-header">
      <h3><i class="fa-solid fa-award" style="color:var(--accent)"></i> Certificate Preview</h3>
      <div class="modal-close" onclick="closeModal('certModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="modal-body">
      <div class="cert-preview">
        <div class="cert-logo">🎓</div>
        <h2>Jezdan Digital Academy</h2>
        <h1>Certificate of Achievement</h1>
        <p>This certifies that</p>
        <h3>John Doe</h3>
        <div class="cert-course">CompTIA Security+ (SY0-701)</div>
        <p style="font-size:12px;opacity:.6">has successfully completed the course with a score of <strong style="color:var(--accent)">82%</strong></p>
        <div class="qr-box"><div class="qr-inner"></div></div>
        <div class="cert-meta">
          <div><span>Certificate ID</span><strong>JDA-2026-SEC-00892</strong></div>
          <div><span>Issue Date</span><strong>May 10, 2026</strong></div>
          <div><span>Valid Until</span><strong>May 10, 2029</strong></div>
          <div><span>Verify at</span><strong>jezdan.co.tz/verify</strong></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="showToast('Opening verification page…','fa-shield-halved')"><i class="fa-solid fa-shield-halved"></i> Verify</button>
      <button class="btn btn-outline" onclick="showToast('Sharing certificate link…','fa-share')"><i class="fa-solid fa-share-nodes"></i> Share</button>
      <button class="btn btn-primary" onclick="showToast('Certificate PDF downloaded!','fa-download')"><i class="fa-solid fa-download"></i> Download PDF</button>
    </div>
  </div>
</div>

<!-- PAYMENT MODAL -->
<div class="modal-overlay" id="payModal">
  <div class="modal">
    <div class="modal-header">
      <h3><i class="fa-regular fa-credit-card" style="color:var(--accent)"></i> Secure Checkout</h3>
      <div class="modal-close" onclick="closeModal('payModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="modal-body">
      <div class="info-box success" style="margin-bottom:16px"><i class="fa-solid fa-tag"></i><p>Coupon <strong>SKILLS40</strong> applied: 40% off → <strong>$17.40/month</strong></p></div>
      <div class="form-group"><label>Cardholder Name</label><input class="form-control" placeholder="John Doe"></div>
      <div class="form-group"><label>Card Number</label><input class="form-control" placeholder="4242 4242 4242 4242" maxlength="19"></div>
      <div class="form-row">
        <div class="form-group"><label>Expiry</label><input class="form-control" placeholder="MM/YY"></div>
        <div class="form-group"><label>CVV</label><input class="form-control" placeholder="123" maxlength="3"></div>
      </div>
      <div class="form-group"><label>Billing Country</label><select class="form-control"><option>Tanzania</option><option>Kenya</option><option>Uganda</option><option>Rwanda</option><option>Other</option></select></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="closeModal('payModal')">Cancel</button>
      <button class="btn btn-primary" onclick="processPayment()"><i class="fa-solid fa-lock"></i> Pay $17.40 Securely</button>
    </div>
  </div>
</div>

<!-- M-PESA MODAL -->
<div class="modal-overlay" id="mpesaModal">
  <div class="modal">
    <div class="modal-header">
      <h3><span style="color:#00b050;font-family:'Syne',sans-serif">M-PESA</span> Payment</h3>
      <div class="modal-close" onclick="closeModal('mpesaModal')"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="modal-body">
      <div style="text-align:center;padding:16px 0">
        <div style="width:64px;height:64px;background:#00b050;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;font-size:28px;color:#fff"><i class="fa-solid fa-mobile-screen-button"></i></div>
        <h3 style="margin-bottom:6px">Amount: <span style="color:var(--accent)">TSh 72,500</span></h3>
        <p style="color:var(--text-muted);font-size:13px">($29 Pro Monthly Plan)</p>
      </div>
      <div class="form-group"><label>M-Pesa Phone Number</label><input class="form-control" placeholder="+255 7XX XXX XXX" value="+255 712 345 678"></div>
      <div class="info-box info"><i class="fa-solid fa-circle-info"></i><p>You will receive an M-Pesa push notification on your phone. Enter your PIN to complete payment.</p></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="closeModal('mpesaModal')">Cancel</button>
      <button class="btn btn-primary" style="background:#00b050;border-color:#00b050" onclick="processMpesa()"><i class="fa-solid fa-mobile-screen-button"></i> Send M-Pesa Request</button>
    </div>
  </div>
</div>

<!-- BULK PAY MODAL -->
<div class="modal-overlay" id="bulkPayModal">
  <div class="modal">
    <div class="modal-header"><h3>Bulk Organization Payment</h3><div class="modal-close" onclick="closeModal('bulkPayModal')"><i class="fa-solid fa-xmark"></i></div></div>
    <div class="modal-body">
      <div class="form-group"><label>Number of Users</label><input class="form-control" type="number" value="45" id="bulkUsers" oninput="calcBulk()"></div>
      <div class="form-group"><label>Plan</label><select class="form-control" onchange="calcBulk()"><option>Monthly ($29/user)</option><option>Yearly ($299/user)</option></select></div>
      <div style="padding:16px;background:var(--bg);border-radius:10px;text-align:center;margin-bottom:16px">
        <div style="font-size:28px;font-weight:800;color:var(--accent)" id="bulkTotal">$1,305</div>
        <div style="font-size:13px;color:var(--text-muted)">45 users × $29 = Total</div>
      </div>
      <div class="info-box success"><i class="fa-solid fa-percent"></i><p>Organizations with 20+ users receive <strong>10% discount</strong> automatically. Invoice generated instantly.</p></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-outline" onclick="closeModal('bulkPayModal')">Cancel</button>
      <button class="btn btn-primary" onclick="showToast('Organization invoice sent to billing@techcorp.co.tz','fa-envelope')"><i class="fa-solid fa-file-invoice"></i> Generate Invoice</button>
    </div>
  </div>
</div>

<!-- NOTIFICATIONS MODAL -->
<div class="modal-overlay" id="notifModal">
  <div class="modal">
    <div class="modal-header"><h3>Notifications</h3><div class="modal-close" onclick="closeModal('notifModal')"><i class="fa-solid fa-xmark"></i></div></div>
    <div class="modal-body" style="padding:0">
      <div class="msg-list">
        <div class="msg-item unread"><div class="msg-ava" style="background:#22c55e;font-size:16px">✓</div><div class="msg-content"><div class="msg-title">Certificate Issued!</div><div class="msg-preview">Your CompTIA Security+ certificate is ready to download.</div></div><div class="msg-time">2h</div></div>
        <div class="msg-item unread"><div class="msg-ava" style="background:var(--accent);font-size:16px">📚</div><div class="msg-content"><div class="msg-title">New course available</div><div class="msg-preview">AWS Cloud Practitioner is now live on the platform.</div></div><div class="msg-time">5h</div></div>
        <div class="msg-item"><div class="msg-ava" style="background:#3b82f6;font-size:16px">⏰</div><div class="msg-content"><div class="msg-title">Live session tomorrow</div><div class="msg-preview">Security+ review session at 10 AM EAT. Register now.</div></div><div class="msg-time">1d</div></div>
        <div class="msg-item"><div class="msg-ava" style="background:#8b5cf6;font-size:16px">🔥</div><div class="msg-content"><div class="msg-title">7-Day streak achieved!</div><div class="msg-preview">You're on fire! Keep your learning streak going.</div></div><div class="msg-time">1d</div></div>
      </div>
    </div>
    <div class="modal-footer"><button class="btn btn-primary" style="width:100%" onclick="closeModal('notifModal')">Mark All as Read</button></div>
  </div>
</div>
