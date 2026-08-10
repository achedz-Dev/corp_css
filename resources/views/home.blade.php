@extends('layouts.app')

@section('content')
  <section class="umpsa-hero">
    <div class="umpsa-shell umpsa-hero__grid">
      <div>
        <p class="umpsa-eyebrow">Universiti Malaysia Pahang Al-Sultan Abdullah</p>
        <h1 class="umpsa-title">UMPSA system CSS foundation</h1>
        <p class="umpsa-lede">
          A Laravel-ready corporate interface layer using UMPSA blue and turquoise green as the primary orientation colors, supported by yellow and white brand accents.
        </p>
        <div class="umpsa-actions" style="margin-top: 24px;">
          <a class="umpsa-btn" href="#tokens">View Tokens</a>
          <a class="umpsa-btn umpsa-btn--secondary" href="#components">Components</a>
          <a class="umpsa-btn umpsa-btn--ghost" href="#forms">Forms</a>
        </div>
      </div>

      <aside class="umpsa-hero__panel" aria-label="UMPSA corporate color palette">
        <div>
          <p class="umpsa-eyebrow" style="color: #fff4b8;">Corporate Colors</p>
          <h2 style="margin: 0; font-size: 1.45rem;">Blue and turquoise lead the system palette.</h2>
        </div>
        <div class="umpsa-swatch-row">
          <div class="umpsa-swatch umpsa-swatch--blue">Blue<small>#184A92</small></div>
          <div class="umpsa-swatch umpsa-swatch--turquoise">Turquoise<small>#00A2A2</small></div>
          <div class="umpsa-swatch umpsa-swatch--yellow">Yellow<small>#FFD500</small></div>
          <div class="umpsa-swatch umpsa-swatch--white">White<small>#FFFFFF</small></div>
        </div>
      </aside>
    </div>
  </section>

  <section class="umpsa-section" id="tokens">
    <div class="umpsa-shell">
      <div class="umpsa-section__head">
        <div>
          <p class="umpsa-eyebrow">Design Tokens</p>
          <h2>Official color and type references</h2>
        </div>
        <span class="umpsa-badge umpsa-badge--turquoise">Swiss721 first</span>
      </div>

      <div class="umpsa-grid">
        <article class="umpsa-card">
          <h3>Primary Blue</h3>
          <p>Use for navigation, headers, primary actions, official labels, and system identity anchors.</p>
        </article>
        <article class="umpsa-card">
          <h3>Turquoise Green</h3>
          <p>Use for active states, secondary actions, focus treatment, confirmations, and orientation highlights.</p>
        </article>
        <article class="umpsa-card">
          <h3>Yellow Accent</h3>
          <p>Use sparingly for alerts, important markers, and small brand accents where contrast remains accessible.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="umpsa-section" id="components">
    <div class="umpsa-shell">
      <div class="umpsa-section__head">
        <div>
          <p class="umpsa-eyebrow">Components</p>
          <h2>System UI defaults</h2>
        </div>
      </div>

      <div class="umpsa-grid">
        <article class="umpsa-card">
          <h3>Buttons</h3>
          <div class="umpsa-actions">
            <button class="umpsa-btn" type="button">Primary</button>
            <button class="umpsa-btn umpsa-btn--secondary" type="button">Secondary</button>
            <button class="umpsa-btn umpsa-btn--accent" type="button">Accent</button>
            <button class="umpsa-btn umpsa-btn--ghost" type="button">Ghost</button>
          </div>
        </article>

        <article class="umpsa-card">
          <h3>Badges</h3>
          <div class="umpsa-actions">
            <span class="umpsa-badge">Official</span>
            <span class="umpsa-badge umpsa-badge--turquoise">Active</span>
            <span class="umpsa-badge umpsa-badge--yellow">Notice</span>
          </div>
        </article>

        <article class="umpsa-card">
          <h3>Alerts</h3>
          <div class="umpsa-form">
            <div class="umpsa-alert">Information state with UMPSA blue.</div>
            <div class="umpsa-alert umpsa-alert--success">Successful action using approved green support.</div>
            <div class="umpsa-alert umpsa-alert--warning">Important notice with yellow accent.</div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="umpsa-section" id="forms">
    <div class="umpsa-shell">
      <div class="umpsa-section__head">
        <div>
          <p class="umpsa-eyebrow">Forms and Data</p>
          <h2>Operational screens</h2>
        </div>
      </div>

      <div class="umpsa-grid">
        <article class="umpsa-card">
          <h3>Form controls</h3>
          <form class="umpsa-form">
            <label class="umpsa-field">
              <span class="umpsa-label">System name</span>
              <input class="umpsa-input" value="UMPSA Official System">
            </label>
            <label class="umpsa-field">
              <span class="umpsa-label">Category</span>
              <select class="umpsa-select">
                <option>Corporate application</option>
                <option>Student service</option>
                <option>Administrative system</option>
              </select>
            </label>
          </form>
        </article>

        <article class="umpsa-card umpsa-card--wide">
          <h3>Table pattern</h3>
          <div class="umpsa-table-wrap">
            <table class="umpsa-table">
              <thead>
                <tr>
                  <th>Token</th>
                  <th>CSS Variable</th>
                  <th>Value</th>
                  <th>Usage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Blue</td>
                  <td>--umpsa-blue</td>
                  <td>#184A92</td>
                  <td>Primary identity</td>
                </tr>
                <tr>
                  <td>Turquoise Green</td>
                  <td>--umpsa-turquoise</td>
                  <td>#00A2A2</td>
                  <td>Orientation and active state</td>
                </tr>
                <tr>
                  <td>Corporate Font</td>
                  <td>--umpsa-font</td>
                  <td>Swiss721</td>
                  <td>Interface typography</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
      </div>
    </div>
  </section>
@endsection
