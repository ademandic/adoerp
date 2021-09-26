<?php
require __DIR__ . '/header.php';
?>
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
        <div>
            <h2 class="pb-2 fw-bold" style="font-size: 16px;">Anasayfa</h2>
            <h5 class="op-7 mb-2" style="font-size: 14px;">Finansal Özet ve Planlama</h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="#" class="btn btn-info btn-border btn-round mr-2">Yönet</a>
            <a href="#" class="btn btn-primary btn-round">Kullanıcı Ekle</a>
        </div>
    </div>
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-money-check" style="color:red;"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Aktif Krediler</p>
                            <h4 class="card-title">₺ 1.150,00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-coins" style="color:darkred;"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Ödenecek Nakit</p>
                            <h4 class="card-title">₺2.525,00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-coins" style="color:green;"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Gelecek Nakit</p>
                            <h4 class="card-title">₺2.525,00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-user" style="color:darkgreen;"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Maaş</p>
                            <h4 class="card-title">₺25.525,00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divinout">
    <div class="chart-container">
    <h4 style="text-align: left;">2021 Gelir-Gider Durumu</h4>
        <canvas id="inoutcome"></canvas>
    </div>
    <div class="infolist">
        <div class="card card-secondary">
            <div class="card-header">
                <div class="card-title">Haftalık Satış</div>
                <div class="card-category">Eylül 20 - Eylül 27</div>
            </div>
            <div class="card-body pb-0">
                <div class="mb-4 mt-2">
                    <h1>₺4,578.58</h1>
                </div>
            </div>
        </div>
        <div class="card card-black" style="margin-top: 15px;">
            <div class="card-header">
                <div class="card-title">Aylık Satış</div>
                <div class="card-category">Eylül 1 - Eylül 27</div>
            </div>
            <div class="card-body pb-0">
                <div class="mb-4 mt-2">
                    <h1>₺4,578.58</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

var months = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül'];

var income = [200, 120, 30, 150, 700, 400, 300, 400, 700];
var outcome = [-100, -50, -200, -300, -46, -100, -300, 200, -100];

var colors = {'red':'rgb(255, 99, 132)', 'redT':'rgba(255, 99, 132, 0.5)',
              'blue':'rgb(54, 162, 235)', 'blueT':'rgba(54, 162, 235, 0.5)'};

const labels = months;
const data = 
{
  labels: labels,
  datasets: [
    {
      label: 'Gelirler',
      data: income,
      borderColor: colors['blue'],
      backgroundColor: colors['blueT'],
    },
    {
      label: 'Giderler',
      data: outcome,
      borderColor: colors['red'],
      backgroundColor: colors['redT'],
    }
  ]
};

const config = 
{
  type: 'bar',
  data: data,
  options: 
  {
    responsive: true,
    plugins: 
    {
      legend: {
        position: 'top',
      },
      title: 
      {
        display: true,
        text: 'Chart.js Bar Chart'
      }
    }
  },
};

var inOutCome = new Chart(
    document.getElementById('inoutcome'),
    config
);
</script>
<?php
require __DIR__ . '/footer.php';
?>