@extends('backend.dashboard.master')
@section('title')
Dashboard
@endsection
@section('content')
 
<div id="content" class="app-content p-3">

    <div class="row g-2">

        <div class="col-xl-12">

            <div class="row g-2">

                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">PAGE VIEWS</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">12,543</div>
                            <p class="text-white fs-10px mb-0">
                                +8.5% vs last month
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">AVG SESS. DURATION</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">02:34</div>
                            <p class="text-white fs-10px mb-0">
                                +12.3% vs last quarter
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">NEW VISITORS</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">45.2%</div>
                            <p class="text-white fs-10px mb-0">
                                -3.2% vs last week
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">BOUNCE RATE</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">32.6%</div>
                            <p class="text-white fs-10px mb-0">
                                -0.5% vs last month
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">TOP REFERRING SITES</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">Google</div>
                            <p class="text-white fs-10px mb-0">
                                2 new referrals added
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-xl-2 col-lg-4 col-6">

                    <div class="card h-100">

                        <div class="card-header">COUNTRIES REACH</div>


                        <div class="card-body">
                            <div class="h4 fw-100 text-theme mb-1">87</div>
                            <p class="text-white fs-10px mb-0">
                                +5 countries vs last year
                            </p>
                            <p class="fs-9px mb-0 text-white text-opacity-50">
                                updated 1 min ago
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-8">

            <div class="card h-100">

                <div class="card-header with-btn">
                    TRAFFIC ANALYTICS
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-8 position-relative">

                            <div id="world-map" class style="height: 344px;"></div>
                            <div
                                class="position-absolute text-white fs-10px bottom-0 end-0 start-0 p-15px d-flex align-items-center">
                                <iconify-icon class="text-white fs-30px me-2"
                                    icon="solar:map-point-rotate-bold-duotone"></iconify-icon>
                                <div class="flex-1">
                                    Real-time data updates every 5 minutes, providing insights into visitor
                                    traffic patterns and peak times. Click on any location for detailed
                                    analytics.
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="p-3">
                                <div class="h4 text-theme mb-0 fw-100">[33,129]</div>
                                <p class="text-white fs-10px fw-semibold mb-0">TOTAL VISITS</p>
                                <hr class="my-2" />
                                <table class="w-100 text-truncate fs-10px">
                                    <thead>
                                        <tr class="text-white">
                                            <th class="w-50">COUNTRY</th>
                                            <th class="w-25 text-end">VISITS</th>
                                            <th class="w-25 text-end">PCT%</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-body text-opacity-75">
                                        <tr>
                                            <td>FRANCE</td>
                                            <td class="text-end">13,849</td>
                                            <td class="text-end">40.79%</td>
                                        </tr>
                                        <tr>
                                            <td>SPAIN</td>
                                            <td class="text-end">3,216</td>
                                            <td class="text-end">9.79%</td>
                                        </tr>
                                        <tr class="text-theme fw-bold bg-white bg-opacity-10">
                                            <td>MEXICO</td>
                                            <td class="text-end">1,398</td>
                                            <td class="text-end">4.26%</td>
                                        </tr>
                                        <tr>
                                            <td>UNITED STATES</td>
                                            <td class="text-end">1,090</td>
                                            <td class="text-end">3.32%</td>
                                        </tr>
                                        <tr>
                                            <td>BELGIUM</td>
                                            <td class="text-end">1,045</td>
                                            <td class="text-end">3.18%</td>
                                        </tr>
                                        <tr>
                                            <td>INDIA</td>
                                            <td class="text-end">1,033</td>
                                            <td class="text-end">3.09%</td>
                                        </tr>
                                        <tr>
                                            <td>BRAZIL</td>
                                            <td class="text-end">954</td>
                                            <td class="text-end">2.81%</td>
                                        </tr>
                                        <tr>
                                            <td>JAPAN</td>
                                            <td class="text-end">911</td>
                                            <td class="text-end">3.09%</td>
                                        </tr>
                                        <tr>
                                            <td>ARCANIA</td>
                                            <td class="text-end">839</td>
                                            <td class="text-end">2.13%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="my-2" />
                                <table class="w-100 text-truncate fs-10px">
                                    <thead>
                                        <tr class="text-white">
                                            <th class="w-50">BROWSER</th>
                                            <th class="w-25 text-end">NO/m</th>
                                            <th class="w-25 text-end">PCT%</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-body text-opacity-75">
                                        <tr>
                                            <td>Chrome</td>
                                            <td class="text-end">8,000</td>
                                            <td class="text-end">40%</td>
                                        </tr>
                                        <tr>
                                            <td>Firefox</td>
                                            <td class="text-end">5,000</td>
                                            <td class="text-end">25%</td>
                                        </tr>
                                        <tr class="text-theme fw-600 bg-white bg-opacity-10">
                                            <td>Safari</td>
                                            <td class="text-end">3,000</td>
                                            <td class="text-end">15%</td>
                                        </tr>
                                        <tr>
                                            <td>Edge</td>
                                            <td class="text-end">2,000</td>
                                            <td class="text-end">10%</td>
                                        </tr>
                                        <tr>
                                            <td>Opera</td>
                                            <td class="text-end">1,000</td>
                                            <td class="text-end">5%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-xl-4">

            <div class="row gy-2">

                <div class="col-lg-12">

                    <div class="card h-100">

                        <div class="card-header with-btn">
                            SECURITY SETTINGS
                            <div class="card-header-btn">
                                <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                        icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                        icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                        icon="material-symbols-light:close-rounded"></iconify-icon></a>
                            </div>
                        </div>


                        <div class="card-body">
                            <table class="table-py-1px fs-10px fw-semibold text-white">
                                <tbody>
                                    <tr>
                                        <td class="pe-3 text-white text-opacity-50">FIREWALL:</td>
                                        <td>ENABLED</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 text-white text-opacity-50">PERMISSION:</td>
                                        <td>ADMIN</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 text-white text-opacity-50">ENCRYPTION:</td>
                                        <td>AES-256</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 text-white text-opacity-50">IDS LEVEL:</td>
                                        <td>High</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-3 text-white text-opacity-50">ACCESS CONTROL:</td>
                                        <td>BIOMETRIC AUTHENTICATION</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>


                <div class="col-lg-12">

                    <div class="card h-100">

                        <div class="card-header with-btn">
                            THREAT DETECTION
                            <div class="card-header-btn">
                                <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                        icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                        icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                        icon="material-symbols-light:close-rounded"></iconify-icon></a>
                            </div>
                        </div>


                        <div class="card-body">

                            <div class="row mb-3 fs-10px pt-1px">

                                <div class="col-4">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <div class="w-40px mx-auto">
                                            <div data-render="apexchart" data-type="donut" data-height="40">
                                            </div>
                                        </div>
                                        <div class="mt-2">THREATS</div>
                                        <div class="text-white">459</div>
                                    </div>
                                </div>


                                <div class="col-4">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <div class="w-40px mx-auto">
                                            <div data-render="apexchart" data-type="donut" data-height="40">
                                            </div>
                                        </div>
                                        <div class="mt-2">FALSE POS</div>
                                        <div class="text-white mt-0">20</div>
                                    </div>
                                </div>


                                <div class="col-4">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <div class="w-40px mx-auto">
                                            <div data-render="apexchart" data-type="donut" data-height="40">
                                            </div>
                                        </div>
                                        <div class="mt-2">RESP. TIME</div>
                                        <div class="text-white mt-0">1 min</div>
                                    </div>
                                </div>

                            </div>

                            <hr class="my-2" />
                            <table class="w-100 text-truncate fs-10px table-py-1px">
                                <thead>
                                    <tr class="text-white">
                                        <th width="40%">DETECTION SRC.</th>
                                        <th width="25%">TYPE</th>
                                        <th width="25%">SEVERITY</th>
                                        <th width="10%">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IDS</td>
                                        <td>Malware</td>
                                        <td>High</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>IPS</td>
                                        <td>Phishing</td>
                                        <td>Medium</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>FIREWALL</td>
                                        <td>DDoS</td>
                                        <td>Critical</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>ENDPOINT</td>
                                        <td>XSS</td>
                                        <td>High</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>IDS</td>
                                        <td>SQL Injection</td>
                                        <td>Low</td>
                                        <td>75</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-4 col-lg-6">

            <div class="card h-100">

                <div class="card-header with-btn">
                    BUSINESS METRICS
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:bar-chart-4-bars"></iconify-icon></div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">REVENUE
                                    </div>
                                    <div class="h6 mb-0 fw-base">$7.5m</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:group-outline"></iconify-icon></div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">CUSTOMERS
                                    </div>
                                    <div class="h6 mb-0 fw-base">45k</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:touch-app-outline"></iconify-icon></div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">VISITS
                                    </div>
                                    <div class="h6 mb-0 fw-base">1.3m</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <hr class="invisible m-0" />
                    <hr />
                    <div class="row g-3">

                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:approval-delegation-outline"></iconify-icon>
                                </div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">PROFIT
                                    </div>
                                    <div class="h6 mb-0 fw-base">$3.2m</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:app-badging-outline"></iconify-icon></div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">LAUNCHES
                                    </div>
                                    <div class="h6 mb-0 fw-base">4</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="fs-32px text-theme d-flex w-40px"><iconify-icon
                                        icon="material-symbols-light:store-outline"></iconify-icon></div>
                                <div class="flex-1">
                                    <div class="fs-10px fw-semibold text-white text-opacity-50 mb-1">SALES
                                    </div>
                                    <div class="h6 mb-0 fw-base">$8.9m</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="col-xl-4 col-lg-6">

            <div class="card h-100">

                <div class="card-header with-btn">
                    SALES PERFORMANCE
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body text-white fs-10px fw-semibold">
                    <div class="d-flex align-items-center mb-1">
                        <span
                            class="w-15px h-15px d-flex align-items-center bg-theme text-black justify-content-center">1</span>
                        <span class="flex-1 ps-2">NORTH AMERICA REGION</span>
                        <span class="w-110px">
                            <div class="progress h-3px bg-black mt-1px">
                                <div class="progress-bar bg-theme" style="width: 75%"></div>
                            </div>
                        </span>
                        <span class="w-50px text-end">$700k</span>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <span
                            class="w-15px h-15px d-flex align-items-center bg-theme bg-opacity-75 text-black justify-content-center">2</span>
                        <span class="flex-1 ps-2">EUROPE REGION</span>
                        <span class="w-110px">
                            <div class="progress h-3px bg-black mt-1px">
                                <div class="progress-bar bg-theme bg-opacity-75" style="width: 85%"></div>
                            </div>
                        </span>
                        <span class="w-50px text-end">$850k</span>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <span
                            class="w-15px h-15px d-flex align-items-center bg-theme bg-opacity-50 text-black justify-content-center">3</span>
                        <span class="flex-1 ps-2">ASIA-PACIFIC REGION</span>
                        <span class="w-110px">
                            <div class="progress h-3px bg-black mt-1px">
                                <div class="progress-bar bg-theme bg-opacity-75" style="width: 60%"></div>
                            </div>
                        </span>
                        <span class="w-50px text-end">$600k</span>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <span
                            class="w-15px h-15px d-flex align-items-center bg-white bg-opacity-25 text-black justify-content-center">4</span>
                        <span class="flex-1 ps-2">SOUTH AMERICA REGION</span>
                        <span class="w-110px">
                            <div class="progress h-3px bg-black mt-1px">
                                <div class="progress-bar bg-white bg-opacity-50" style="width: 90%"></div>
                            </div>
                        </span>
                        <span class="w-50px text-end">$900k</span>
                    </div>
                    <div class="d-flex align-items-center mb-0">
                        <span
                            class="w-15px h-15px d-flex align-items-center bg-white bg-opacity-25 text-black justify-content-center">5</span>
                        <span class="flex-1 ps-2">AFRICA REGION</span>
                        <span class="w-110px">
                            <div class="progress h-3px bg-black mt-1px">
                                <div class="progress-bar bg-white bg-opacity-25" style="width: 40%"></div>
                            </div>
                        </span>
                        <span class="w-50px text-end">$400k</span>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-xl-4">

            <div class="card h-100">

                <div class="card-header with-btn">
                    OPERATIONAL OVERVIEW
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="d-flex fs-10px">
                        <div class="fs-40px text-theme">
                            <iconify-icon
                                icon="material-symbols-light:precision-manufacturing-outline-sharp"></iconify-icon>
                        </div>
                        <div class="flex-1 ps-3">
                            <div>
                                Increased weekly production rate by <span
                                    class="text-success fw-semibold">5%</span>, reflecting improved
                                operational performance.
                            </div>
                            <hr class="invisible m-0" />
                            <hr />
                            <div class="row mb-4px text-truncate">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="text-body text-opacity-50 w-70px">CURRENT:</div>
                                        <div class="text-white fw-semibold flex-1">1,000 UNITS</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-body text-opacity-50 w-70px">TARGET:</div>
                                        <div class="text-white fw-semibold flex-1">1,200 UNITS</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="text-body text-opacity-50 w-70px">RATE:</div>
                                        <div class="text-white fw-semibold flex-1">200 UNITS/W</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-body text-opacity-50 w-70px">PREV WEEK:</div>
                                        <div class="text-white fw-semibold flex-1">190 UNITS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-xl-4 col-lg-6">

            <div class="card h-100">

                <div class="card-header with-btn">
                    SALES BY SOCIAL SOURCE
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-1">

                            <div class="mb-0 h4 fw-300 text-theme flex-1">
                                $70,563.43
                            </div>


                            <div class="text-white text-opacity-50 fs-10px fw-semibold"><span
                                    class="text-white">+45.76%</span> vs yesterday</div>

                        </div>
                    </div>
                    <hr />

                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-apple"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">APPLE STORE</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="34,840.17">34,840.17</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">FACEBOOK</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="12,502.67">12,502.67</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">INSTAGRAM</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="8,569.75">8,569.75</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">YOUTUBE</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="6,021.79">6,021.79</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">TWITTER</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="4,799.20">4,799.20</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-google"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">GOOGLE</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="3,405.85">3,405.85</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-white mb-2">
                        <div
                            class="w-20px h-20px fs-12px bg-white bg-opacity-10 text-white d-flex align-items-center justify-content-center">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <div class="flex-1 px-3 fs-10px">TIKTOK</div>
                        <div class="text-white fw-semibold small">
                            $<span data-animation="number" data-value="424.00">424.00</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-xl-4 col-lg-6">

            <div class="card">

                <div class="card-header with-btn">
                    TOP PRODUCTS BY UNITS SOLD
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body">

                    <div class="d-flex align-items-center mb-3 fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:phone-iphone-outline-sharp"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">APPLE IPHONE 15 PRO MAX</div>
                            <div class="text-white text-opacity-50">$1,099.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="210">210</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon icon="material-symbols-light:camera-outline"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">SONY A7 IV CAMERA</div>
                            <div class="text-white text-opacity-50">$2,499.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="198">198</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:laptop-mac-outline-sharp"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">APPLE MACBOOK PRO (M2, 2024)</div>
                            <div class="text-white text-opacity-50">$2,499.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="162">162</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:watch-screentime-outline"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">APPLE WATCH ULTRA 2</div>
                            <div class="text-white text-opacity-50">$799.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="130">130</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:sports-esports-outline-sharp"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">MICROSOFT XBOX SERIES X</div>
                            <div class="text-white text-opacity-50">$499.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="120">120</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center fs-10px">
                        <div
                            class="bg-opacity-10 bg-white fs-20px w-30px h-30px text-white d-flex align-items-center justify-content-center">
                            <iconify-icon icon="material-symbols-light:speaker-outline-sharp"></iconify-icon>
                        </div>
                        <div class="text-truncate ps-3 flex-1">
                            <div class="text-white fw-semibold">JBL FLIP 6 SPEAKER</div>
                            <div class="text-white text-opacity-50">$129.00</div>
                        </div>
                        <div class="text-center">
                            <div class="text-white fw-semibold fs-12px"><span data-animation="number"
                                    data-value="110">110</span></div>
                            <div class="text-white text-opacity-50 fs-7px fw-semibold mb-1">SOLD</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-4">

            <div class="card h-100">

                <div class="card-header with-btn">
                    MARKETING CAMPAIGN
                    <div class="card-header-btn">
                        <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon
                                icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                        <a href="#" data-toggle="card-expand" class="btn"><iconify-icon
                                icon="material-symbols-light:fullscreen"></iconify-icon></a>
                        <a href="#" data-toggle="card-remove" class="btn"><iconify-icon
                                icon="material-symbols-light:close-rounded"></iconify-icon></a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">CONVERSION RATE
                            </div>
                            <div class="h4 text-theme mb-2">12%</div>
                            <div class="fs-10px">
                                <span class="text-white fw-semibold">294k</span> total clicks<br />
                                <span class="text-white fw-semibold">23%</span> click-through rate
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fw-semibold text-white text-opacity-50 fs-10px mb-2">USER REACHED
                            </div>
                            <div class="h4 text-theme mb-2">7.58m</div>
                            <div class="fs-10px">
                                <span class="text-white fw-semibold">23%</span> bounce rate <br />
                                <span class="text-white fw-semibold">85%</span> engagement rate
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center">
                        <div class="w-60px">
                            <div
                                class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
                                <iconify-icon icon="material-symbols-light:ads-click"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-1 ps-3 fs-10px text-truncate text-white">
                            <div class="fw-semibold">PAID SEARCH ADS</div>
                            <div class="text-white text-opacity-50">MON 26/6 - SUN 2/7</div>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="progress h-4px bg-white bg-opacity-10">
                                        <div class="progress-bar progress-bar-striped bg-theme"
                                            data-animation="width" data-value="68%" style="width: 68%">
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-2 w-30px text-center"><span data-animation="number"
                                        data-value="68">68</span>%</div>
                            </div>
                            <div class="text-white text-opacity-50 text-truncate">
                                47.8% people made a purchase after clicking the ad
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center">
                        <div class="w-60px">
                            <div
                                class="h-60px h-60px d-flex align-items-center justify-content-center bg-white bg-opacity-10 text-white fs-36px">
                                <iconify-icon
                                    icon="material-symbols-light:video-camera-front-outline-sharp"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-1 ps-3 fs-10px text-truncate text-white">
                            <div class="fw-semibold">VIDEO AD CAMPAIGN</div>
                            <div class="text-white text-opacity-50">MON 17/7 - SUN 23/7</div>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="progress h-4px bg-white bg-opacity-10">
                                        <div class="progress-bar progress-bar-striped bg-theme"
                                            data-animation="width" data-value="85%" style="width: 85%">
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-2 w-30px text-center"><span data-animation="number"
                                        data-value="85">85</span>%</div>
                            </div>
                            <div class="text-white text-opacity-50 text-truncate">
                                54.6% viewers watched till the end
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection