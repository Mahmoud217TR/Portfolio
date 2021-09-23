<template>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="contact-container">
                    <div class="contact-info border border-light">
                        <div class="container">
                            <div class="row py-4">
                                <div class="col">
                                    <div class="display-6">
                                        My Contacts:
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="text-muted contact-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis repudiandae labore architecto similique voluptatibus amet esse molestiae tempore temporibus omnis nesciunt vel asperiores sequi consequuntur dicta quia, distinctio maiores porro nihil quis illum veritatis commodi. Perferendis sed architecto sit soluta?
                                    </p>
                                </div>
                            </div>
                            <div class="row py-2" ref="emailRow">
                                <div class="col-2 text-end">
                                    <svg @click="copyEmail" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="color-changer bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                    </svg>
                                </div>
                                <div class="col-10 d-flex align-items-end">
                                    <span @click="copyEmail" class="mb-0 h5 color-changer">{{ email }}</span>
                                </div>
                            </div>
                            <div class="row py-2" ref="phoneRow">
                                <div class="col-2 text-end">
                                    <svg @click="copyPhone" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="color-changer bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                </div>
                                <div class="col-10 d-flex align-items-end">
                                    <span @click="copyPhone" class="mb-0 h5 color-changer">{{ phone }}</span>
                                </div>
                            </div>
                            <div class="row py-2 color-changer" ref="teleRow">
                                <div class="col-2 text-end">
                                    <svg @click="copyTele" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="color-changer bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
                                </div>
                                <div class="col-10 d-flex align-items-end">
                                    <span @click="copyTele" class="mb-0 h5 color-changer">{{ tele }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form border border-light">
                        <div class="container-fluid">
                            <div class="row py-4">
                                <div class="col text-center text-light">
                                    <span class="h2">
                                        Send Me a Message
                                    </span>
                                </div>
                            </div>
                            <form action="#">
                                <div class="row py-2">
                                    <div class="col-lg-4 text-lg-end text-start text-light">
                                        <label class="form-label" for="name">
                                            Name:
                                        </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" id="name" name="name">
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 text-lg-end text-start text-light">
                                        <label class="form-label" for="email">
                                            Your Email:
                                        </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-4 text-lg-end text-start text-light">
                                        <label class="form-label" for="message">
                                            Message:
                                        </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" type="message" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-8 offset-lg-4">
                                        <button class="btn btn-gold" type="submit">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>

    .contact-container{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .contact-info{
        background-color: #f8f9fa;
        min-height: 30rem;
        width:40%;
        border-radius: 0.5rem 0 0 0.5rem;
    }

    .contact-form{
        background-color: #212529;
        min-height: 30rem;
        width:40%;
        z-index: 1000;
        position: relative;
        border-radius: 0 0.5rem 0.5rem 0;
    }

    .contact-form::before{
        content: "";
        background-color: #212529;
        height: 1.5rem;
        width: 1.5rem;
        position: absolute;
        top:10%;
        left:-.75rem;
        transform: rotate(45deg);
    }

    .form-control:focus{
        box-shadow: 0 0 0 0.25rem rgb(250 250 250/25%)!important;
    }

    .form-label{
        font-size: 1.5rem;
    }

    #message{
        height: 10rem;
        resize: none;
    }

    .contact-text{
        min-height: 7rem;
    }

    .color-changer{
        transition: .1s linear;
        cursor: pointer;
    }

    .golden-color{
        color: #F9A826!important;
    }

    @media only screen and (max-width: 992px) {

    .contact-container{
        display: block;
    }

    .contact-info{
        margin: 0 auto;
        background-color: #f8f9fa;
        min-height: 20rem;
        width:80%;
        border-radius: 0.5rem 0.5rem 0 0;
        
    }

    .contact-form{
        margin: 0 auto;
        background-color: #212529;
        min-height: 20rem;
        width:80%;
        z-index: 1000;
        position: relative;
        border-radius: 0 0 0.5rem 0.5rem;
    }

    .contact-form::before {
        position: absolute;
        left:10%;
        top:-.75rem;
    }

}
    
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                email:'mahmoudtr17@gmail.com',
                phone:'+963938318491',
                tele:'@MahmoudTR',
                show: false
            }
        },
        methods: {
            toggleShow(){
                this.show = !this.show
            },
            copyEmail(){
                this.$refs.emailRow.classList.add('golden-color')
                setTimeout(() => {  this.$refs.emailRow.classList.remove('golden-color') }, 300);
                
            },
            copyPhone(){
                this.$refs.phoneRow.classList.add('golden-color')
                setTimeout(() => {  this.$refs.phoneRow.classList.remove('golden-color') }, 300);
            },
            copyTele(){
                this.$refs.teleRow.classList.add('golden-color')
                setTimeout(() => {  this.$refs.teleRow.classList.remove('golden-color') }, 300);
            },
        },
    }
</script>
