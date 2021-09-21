    <!-- Calculator Section -->
    <div class="calculator-box">
        <div class="calculator-title">
            <h2>QuietCool vs Air Conditioning</h2>
            <h3>(Calculate How Much You Spend)</h3>
        </div>


        <div class="comparison-main-box">
            <div class="comparison-box-qc">
                <div id="comparison-box-qc-wrapper">
                    <div class="selection-box">
                        <h2 class="selection-box-title">QuietCool</h2>
                        <!-- This is the fan selection -->
                        <select id="fan-selection" onchange="onFanSelect()">
                                <option value="">Select Fan</option>
                                <option value="trident">Trident</option>
                                <option value="stealth">Stealth</option>
                            </select>
                        <!-- This is the trident models dropdown -->
                        <select id="trident-models" onchange="onTridentSelect()">
                                <option value="">Please Select Model</option>
                                <option value="1.5">1.5</option>
                                <option value="2.5">2.5</option>
                                <option value="3.3">3.3</option>
                                <option value="4.8">4.8</option>
                                <option value="5.5">5.5</option>
                                <option value="6.0">6.0</option>
                                <option value="7.0">7.0</option>
                            </select>

                        <!-- This is the trident models dropdown -->
                        <select id="stealth-models" onchange="onStealthSelect()">
                                <option value="">Please Select Model</option>
                                <option value="1.5">1.5</option>
                                <option value="2.5">2.5</option>
                                <option value="3.3">3.3</option>
                                <option value="4.8">4.8</option>
                                <option value="5.5">5.5</option>
                                <option value="6.0">6.0</option>
                                <option value="7.0">7.0</option>
                            </select>
                    </div>

                    <div id="slider-and-results-wrapper">
                        <!-- This is the Slider -->
                        <div class="slider-box">
                            <!-- This is the Hours Section -->
                            <div class="hours-box">
                                <h2 class="hours-title">Run time: <span id="slider-hours-results">0</span> Hours</h2>
                                <!-- <h3 > 0</h3> -->
                            </div>
                            <!-- This is the Slider Input -->
                            <div class="slider-wrapper">
                                <input type="range" name="slider-hours-range" id="slider-hours-range" min="0" max="12" value="0">
                            </div>
                        </div>
                        <div class="title-section">
                            <h3>The Average Amount You Spend</h3>
                        </div>


                        <!-- This is the Day Results -->
                        <div class="day-box">
                            <h2 class="day-title">Day</h2>
                            <h3 id="slider-day-results">$0</h3>
                        </div>
                        <!-- This is the Month Results -->
                        <div class="month-box">
                            <h2 class="month-title">Month</h2>
                            <h3 id="slider-month-results">$0</h3>
                        </div>
                        <!-- This is the Year Results -->
                        <div class="year-box">
                            <h2 class="year-title">Year</h2>
                            <h3 id="slider-year-results">$0</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comparison-box-ac">
                <div id="comparison-box-ac-wrapper">
                    <div class="selection-box-ac">
                        <h2 class="selection-box-title">Air Conditioning</h2>
                        <!-- This is the fan selection -->
                        <select id="ac-kwh-selection" onchange="onAcKwhSelect()">
                                <option value="">Select Watts</option>
                                <option value="3000">3000 Watts</option>
                                <option value="5000">5000 Watts</option>
                                <option value="8000">8000 Watts</option>
                            </select>
                    </div>

                    <div id="slider-and-results-kwh-wrapper">
                        <!-- This is the Slider -->
                        <div class="slider-box">
                            <!-- This is the Hours Section -->
                            <div class="hours-box">
                                <h2 class="hours-title">Run time: <span id="slider-hours-results-ac">0</span> Hours</h2>
                                <!-- <h3 id="slider-hours-results-ac"> 0</h3> -->
                            </div>
                            <!-- This is the Slider Input -->
                            <div class="slider-wrapper-ac">
                                <input type="range" name="slider-hours-range" id="slider-hours-range-ac" min="0" max="12" value="0">
                            </div>
                        </div>


                        <!-- This is the Day Results -->

                        <div class="title-section">
                            <h3>The Average Amount You Spend</h3>
                        </div>
                        <div class="day-box">
                            <h2 class="day-title">Day</h2>
                            <h3 id="slider-day-results-ac">$0</h3>
                        </div>
                        <!-- This is the Month Results -->
                        <div class="month-box">
                            <h2 class="month-title">Month</h2>
                            <h3 id="slider-month-results-ac">$0</h3>
                        </div>
                        <!-- This is the Year Results -->
                        <div class="year-box">
                            <h2 class="year-title">Year</h2>
                            <h3 id="slider-year-results-ac">$0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>