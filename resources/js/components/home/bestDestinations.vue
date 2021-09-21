<template>
  <section id="testimonials" class="py-4">
    <div class="testimonials-clean my-5" style="background-color: transparent">
      <div class="container">
        <div class="intro">
          <h2 class="text-center">Destinations preferées de nos utilisateurs</h2>
          <p class="text-center"></p>
        </div>
        <div class="row h-100">
          <div class="col-md-6">
            <div class="block">
              <span class="demonstration"></span>
              <el-carousel height="450px">
                <el-carousel-item v-for="(item, index) in departs" :key="item.img + index  + 1">
                  <h3 class="text-item-color font-weight-bold text-center">{{ item.name }}</h3>
                  <el-image :src="item.img"></el-image>
                </el-carousel-item>
              </el-carousel>
            </div>
          </div>
          <div class="col-md-6">
            <div class="block">
              <span class="demonstration"></span>
              <el-carousel trigger="click" height="450px">
                <el-carousel-item v-for="(item, index) in arrivees" :key="item.img + index">
                  <h3 class="text-item-color font-weight-bold text-center">{{ item.name }}</h3>
                  <el-image :src="item.img"></el-image>
                </el-carousel-item>
              </el-carousel>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>

    export default {
        props: ['destinations'],
        data: function () {
            return {
                departs: [],
                arrivees: []
            }
        },
        methods: {

            filterData: function() {

                const el = this

                $.each(this.destinations, function(key, value) {

                    el.departs.push({name: value.city_from, img: value.image_from})

                    el.arrivees.push({name: value.city_to, img: value.image_to})

                });
        },

        },

        mounted() {

            this.filterData();
        }
    }

</script>

<style>
    .el-carousel__item h3 {
        color: #475669;
        font-size: 25px;
        opacity: 0.75;
        line-height: 150px;
        margin: 0;
    }
</style>
