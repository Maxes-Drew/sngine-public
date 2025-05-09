<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subscriptions | Chicken-n-Egg</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body { font-family: 'Poppins', sans-serif; margin: 0; display: flex; flex-direction: column; min-height: 100vh; }
    .main-header { background: #fff; border-bottom: 1px solid #ddd; padding: 10px 20px; }
    .main-header .container { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
    .main-header .logo-wrapper { display: flex; align-items: center; }
    .main-header .menu-icon { margin-right: 15px; color: #333; }
    .sidebar { width: 450px; border-right: 1px solid #ccc; padding: 0 10px 0 0; margin-left: 20px; }
    .col1 { width: 200px; padding-left: 0; }
    .col2 { width: 250px; }
    .main-content { margin-left: 20px; flex-grow: 1; padding: 20px; }
    .dropdowns { margin-bottom: 20px; display: flex; flex-wrap: wrap; gap: 10px; }
    .dropdowns select { padding: 10px; width: 150px; }
    .link-rows { max-height: 500px; overflow-y: auto; }
    .link-row { display: flex; align-items: center; margin: 10px 0; }
    .link-row img { margin-right: 10px; width: 20px; }
    a { color: #007BFF; text-decoration: none; }
    a:hover { text-decoration: underline; }
    ul { list-style: none; padding: 0; margin-top: 40px; }
    li { margin: 5px 0; position: relative; }
    .user-card { display: none; position: absolute; left: 100%; top: 0; background: #fff; border: 1px solid #ccc; padding: 10px; z-index: 10; width: 200px; }
    li:hover .user-card { display: block; }
  </style>
</head>
<body>
  <div class="main-wrapper">
    <header class="main-header">
      <div class="container">
        <div class="logo-wrapper">
          <a href="#" class="menu-icon d-block d-md-none"><i class="fas fa-bars header-icon"></i></a>
          <a href="https://chicken-n-egg.com" class="logo">
            <img src="/content/uploads/system_logo.png" alt="Chicken-n-Egg">
          </a>
          <select id="sngine-switch" class="ml-2">
            <option value="sngine1">Sngine 1</option>
            <option value="sngine2">Sngine 2</option>
            <option value="delta_wtp">Delta WTP</option>
          </select>
        </div>
      </div>
    </header>
    <div style="display: flex; flex-grow: 1;">
      <div class="sidebar">
        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#containerModal">Add Container</button>
        <select id="list-type">
          <option value="subscribers">Subscribers</option>
          <option value="jobs">Jobs</option>
          <option value="marketplace">Marketplace</option>
          <option value="calendar">Calendar</option>
        </select>
        <div class="list-wrapper">
          <div class="col1" id="list-col1">
            <h3 id="col1-title">ID - Name</h3>
            <ul id="list-content"></ul>
          </div>
          <div class="col2" id="list-col2">
            <h3 id="col2-title">Email</h3>
            <ul id="list-extra"></ul>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="dropdowns">
          <select id="posts-select">
            <option value="">Posts</option>
            <option value="1">Sample Post</option>
          </select>
          <select id="pages-select">
            <option value="">Pages</option>
            <option value="9">AffiliateProgram</option>
            <option value="8">Biosecurity22</option>
            <option value="4">consumer</option>
            <option value="2">eggoconomy</option>
            <option value="1">flockmodel</option>
          </select>
          <select id="groups-select">
            <option value="">Groups</option>
          </select>
          <select id="blogs-select">
            <option value="">Blogs</option>
            <option value="2">Bio-Security</option>
            <option value="15">FlockTalk</option>
            <option value="26">Egg-Royaltist</option>
          </select>
        </div>
        <div class="link-rows" id="link-rows">
          <div class="link-row"><img src="https://via.placeholder.com/20" alt=""><a href="https://chicken-n-egg.com/posts/1" target="_blank">Sample Post</a></div>
          <div class="link-row"><img src="https://via.placeholder.com/20" alt=""><a href="https://chicken-n-egg.com/pages/AffiliateProgram" target="_blank">AffiliateProgram</a></div>
          <div class="link-row"><img src="https://via.placeholder.com/20" alt=""><a href="https://chicken-n-egg.com/blogs/category/2/Bio-Security" target="_blank">Bio-Security</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="containerModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Container</h5>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="Container Name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="runContainer()">Run</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const mockData = {
      subscribers: { col1: { title: 'ID - Name', items: ['1 - drew', '2 - rostup'] }, col2: { title: 'Email', items: ['drew@drews-consulting.com', 'rostup@msn.com'] } },
      jobs: { col1: { title: 'Job Title', items: ['Farm Manager', 'Egg Packer'] }, col2: { title: 'Salary', items: ['$50k', '$30k'] } },
      marketplace: { col1: { title: 'Item', items: ['Chicken Feed', 'Egg Cartons'] }, col2: { title: 'Price', items: ['$20', '$5'] } },
      calendar: { col1: { title: 'Event', items: ['Flock Meeting', 'Egg Sale'] }, col2: { title: 'Date', items: ['2025-03-30', '2025-04-01'] } }
    };
    const listType = document.getElementById('list-type');
    const col1Title = document.getElementById('col1-title');
    const col2Title = document.getElementById('col2-title');
    const listContent = document.getElementById('list-content');
    const listExtra = document.getElementById('list-extra');
    const linkRows = document.getElementById('link-rows');
    const sngineSwitch = document.getElementById('sngine-switch');

    function updateList(type) {
      const data = mockData[type] || mockData['subscribers'];
      col1Title.innerHTML = data.col1.title;
      col2Title.innerHTML = data.col2.title;
      listContent.innerHTML = data.col1.items.map(item => `<li>${item}<div class="user-card">${data.col2.items[data.col1.items.indexOf(item)]}<br><span class="run-btn" onclick="openContainer('${item}')">Run</span></div></li>`).join('');
      listExtra.innerHTML = data.col2.items.map(item => `<li>${item}</li>`).join('');
    }

    listType.addEventListener('change', () => updateList(listType.value));
    sngineSwitch.addEventListener('change', () => updateList(listType.value));
    updateList('subscribers');

    document.querySelectorAll('.dropdowns select').forEach(select => {
      select.addEventListener('change', () => {
        document.querySelectorAll('.dropdowns select').forEach(s => s.classList.remove('active-tab'));
        select.classList.add('active-tab');
        const value = select.value;
        if (value) {
          const links = {
            'posts-select': [{ pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/posts/1', text: 'Sample Post' }],
            'pages-select': [
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/pages/AffiliateProgram', text: 'AffiliateProgram' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/pages/Biosecurity22', text: 'Biosecurity22' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/pages/consumer', text: 'consumer' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/pages/eggoconomy', text: 'eggoconomy' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/pages/flockmodel', text: 'flockmodel' }
            ],
            'blogs-select': [
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/blogs/category/2/Bio-Security', text: 'Bio-Security' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/blogs/category/15/FlockTalk', text: 'FlockTalk' },
              { pic: 'https://via.placeholder.com/20', href: 'https://chicken-n-egg.com/blogs/category/26/Egg-Royaltist', text: 'Egg-Royaltist' }
            ]
          };
          const link = links[select.id]?.find(l => l.text === select.options[select.selectedIndex].text);
          if (link) {
            const div = document.createElement('div');
            div.className = 'link-row';
            div.innerHTML = `<img src="${link.pic}" alt=""><a href="${link.href}" target="_blank">${link.text}</a>`;
            linkRows.prepend(div);
          }
        }
      });
    });

    fetch('https://chicken-n-egg.com/cne_my_subs.php?endpoint=my_subscribers&api_key=TESTKEY123')
      .then(r => {
        if (!r.ok) throw new Error(`HTTP ${r.status}`);
        return r.json();
      })
      .then(data => {
        console.log('API Success:', data);
        const links = data.groups?.map(group => ({
          pic: 'https://via.placeholder.com/20',
          href: `https://chicken-n-egg.com/groups/${group.group_name}`,
          text: `${group.group_name} (ID: ${group.group_id})`
        })) || [];
        links.forEach(link => {
          const div = document.createElement('div');
          div.className = 'link-row';
          div.innerHTML = `<img src="${link.pic}" alt=""><a href="${link.href}" target="_blank">${link.text}</a>`;
          linkRows.appendChild(div);
        });
      })
      .catch(e => console.error('Fetch failed:', e));

    function openContainer(item) { console.log('Opening:', item); }
    function runContainer() { console.log('Running container'); }
  </script>
  <img src="/track.php?user_id=<?php echo $_COOKIE['user_tracker'] ?? 'guest'; ?>" width="1" height="1" style="display:none;">
</body>
</html>