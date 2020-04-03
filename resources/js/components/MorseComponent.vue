<template>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8 col-lg-10 col-md-12 col-12">
                <!-- Card Start -->
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header">
                        <h1 class="text-right">Morse Code Generator</h1>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter text to convert" v-model="text" v-on:focus="clearTable" v-on:keyup.enter="submit">
                            <span class="input-group-btn">
                                <button class="btn btn-outline-dark" type="button" v-on:click="submit">Generate Morse Code</button>
                                <button class="btn btn-outline-dark" type="button" v-show='controlButton' v-on:click="stopMusic">Stop Morse</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Alert -->
                <div v-show="alert" class="alert alert-danger" role="alert">
                    <p>{{ error }}</p>
                </div>

            </div>
        </div>


        <!-- Table with morse code -->
        <div class="table-responsive" v-if="table">
            <table class="table">
                <thead class="thead-dark|thead-light">
                    <tr>
                        <th scope="col" v-for="item in tableTitle">{{ item }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td v-for="item in tableData">{{ item }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
    require('howler');

    export default {
        data() {
            return {
                text: '',
                controlButton: false,
                table: false,
                tableTitle: [],
                tableData: [],
                alert: false,
                error: '',
            }
        },
        methods: {
            /**
             * Submit text to morse interpreter
             */
            submit() {
                this.table = false;
                this.alert = false;

                var data = {
                    text: this.text,
                };

                axios.post('api/create', data)
                    .then((response) => {
                        this.tableTitle = response.data[0];
                        this.tableData = response.data[1];
                        this.table = true;
                        this.sound();
                        this.controlButton = true;
                    }).catch((error) => {
                        this.alert = true;
                        this.error = error.response.data.errors.text[0];
                        setTimeout(() => {
                            this.alert = false;
                        }, 3000);
                    });

            },
            /**
             * Hide table when input is focused
             */
            clearTable() {
                this.table = false;
            },
            stopMusic() {
                location.reload();
            },
            /**
             * Generate sound from morse code
             */
            sound() {
                var sound = new Howl({
                    src: ['sounds/sounds.webm', 'sounds/sounds.mp3'],
                    volume: 0.4,
                    sprite: {
                        0: [0, 2213.1519274376415],
                        1: [4000, 2012.8798185941043],
                        2: [8000, 1803.900226757369],
                        3: [11000, 1618.1405895691619],
                        4: [14000, 1414.9659863945576],
                        5: [17000, 1214.6938775510207],
                        6: [20000, 1414.9659863945594],
                        7: [23000, 1618.1405895691619],
                        8: [26000, 1812.6077097505658],
                        9: [29000, 2012.8798185941043],
                        a: [33000, 1407.7097505668944],
                        b: [36000, 2011.4285714285743],
                        c: [40000, 2307.482993197276],
                        d: [44000, 1593.4693877551],
                        e: [47000, 664.671201814059],
                        f: [49000, 1901.133786848071],
                        g: [52000, 2005.6235827664395],
                        h: [56000, 1622.4943310657593],
                        i: [59000, 943.3106575963706],
                        j: [61000, 2475.827664399091],
                        k: [65000, 2017.2335600907018],
                        l: [69000, 1918.548752834468],
                        m: [72000, 1732.7891156462556],
                        n: [75000, 1448.3446712018094],
                        o: [78000, 2574.512471655325],
                        p: [82000, 2411.9727891156517],
                        q: [86000, 2969.2517006802746],
                        r: [90000, 1872.1088435374186],
                        s: [93000, 1605.079365079362],
                        t: [96000, 1384.4897959183697],
                        u: [99000, 1994.013605442177],
                        v: [102000, 2435.192743764176],
                        w: [106000, 2127.528344671205],
                        x: [110000, 2475.827664399091],
                        y: [114000, 2789.297052154197],
                        z: [118000, 2342.312925170063]
                    }
                });

                var text = this.text;
                var letters = text.split('');

                /**
                 * Iterate through text
                 *     - call each howl (letter) with 2.5 delay
                 */
                letters.forEach((letter, i) => {
                  setTimeout(() => {
                    sound.play(letter);
                  }, i * 2500);
                });

            }



        }
    }


</script>
