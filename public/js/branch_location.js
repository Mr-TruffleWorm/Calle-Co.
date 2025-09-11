// Branch data
        const branches = [
    { 
        name: "Calle Co. 157-C Sanchez St. Corner Sto. Nino St. Commonwealth", 
        location: "Quezon City", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. 23 Jose Abad Santos Ave. Salawag", 
        location: "Dasmarinas Cavite", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2298.3283289714764!2d120.9737940804491!3d14.351341022113857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d59c0aed8d41%3A0xb162c61df3110550!2sCalle%20Co.%20-%20Salawag%20Branch!5e0!3m2!1sen!2sph!4v1757494474079!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. 375 Quirino Highway Parthenon Square Tandang Sora", 
        location: "Quezon City", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. A. Bonifacio", 
        location: "Mandaluyong City", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.18925592576!2d121.0326841028332!3d14.58828919240247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9465b1797d1%3A0x851ec4da57e3c446!2sCalle%20Co.%20A.%20Bonifacio!5e0!3m2!1sen!2sph!4v1757493516958!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Aringay", 
        location: "La Union", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.45268685112376!2d120.36236168781298!3d16.39323274159634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33919d003ddc9725%3A0xcb20187759ba5fb5!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757494109218!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Badoc", 
        location: "Ilocos Norte", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1898.0666691571912!2d120.47483120040825!3d17.925933792282322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338e93e31a2709cb%3A0xd901f6ef8d2cff69!2sCALLE%20Co.%20BADOC%20I.N!5e0!3m2!1sen!2sph!4v1757494246999!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Bagumbong Rd.", 
        location: "Caloocan City", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405.56051948119045!2d121.00425107232375!3d14.748531234282346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b10058e1fbc5%3A0x7a82736caafb5890!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757493903105!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Barangka Drive, Boni Ave.", 
        location: "Mandaluyong City", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. BF Resort Village, Brgy. Talon Dos", 
        location: "Las Pinas City", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d287.1849446989762!2d120.98451583514522!3d14.433810620746893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3436f274ceb%3A0x9057960937324875!2sCalle%20Co.%20BFRV%2C%20Las%20Pi%C3%B1as%20City!5e0!3m2!1sen!2sph!4v1757487917376!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Blk 9 Lot 51 Kinnari Phase 2 Carmona Estate", 
        location: "Carmona Cavite", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.7074853924256!2d121.05730896808221!3d14.31265948963444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70f65f6370f%3A0xa796397c105a188e!2sCalle%20Co%20Carmona!5e0!3m2!1sen!2sph!4v1757493975414!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Brgy. San Jose", 
        location: "Rodriguez Rizal", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.3509701782386!2d121.12911399049723!3d14.733914678654791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb002670f8c3%3A0xa3adaca02256ab1d!2sCalle%20Co.%20San%20Jose%2C%20Rodriguez%20Rizal!5e0!3m2!1sen!2sph!4v1757493388515!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. C Santos St. Brgy. Ugong", 
        location: "Pasig", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. Carmona", 
        location: "Rizal", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1625.4420731339399!2d121.05665883297992!3d14.312910716629839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70f65f6370f%3A0xa796397c105a188e!2sCalle%20Co%20Carmona!5e0!3m2!1sen!2sph!4v1757493932608!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Estanislao St. Lakeview homes", 
        location: "Putatan, Muntinlupa", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. Fourth Estate", 
        location: "Paranaque City", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1148.5917210907733!2d121.03046605810069!3d14.462473916988518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf8eec3904b9%3A0x3c392fc8e926d185!2sCalle%20Co%20Fourth%20Estate!5e0!3m2!1sen!2sph!4v1757494130009!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Galeria, Victoria Mall", 
        location: "Balanga, Bataan", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5925595585977!2d120.5414409778193!3d14.679048936435796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33964008c4fd605d%3A0x75fdca29c0da6eea!2sGaleria%20Victoria!5e0!3m2!1sen!2sph!4v1757494175337!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. LRT Central", 
        location: "Metro Manila", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. Olalia Cogeo", 
        location: "Antipolo Rizal", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. Paliparan", 
        location: "Dasmarinas Cavite", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9194.563168485789!2d120.97932255737872!3d14.320863936541466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5d173cd7243%3A0x5a0ab84de6142b07!2sCalle%20Co.%20Paliparan%20Cavite!5e0!3m2!1sen!2sph!4v1757493084732!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Pampang", 
        location: "Angeles City, Pampanga", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2294927598011!2d120.57384085295644!3d15.147441351850407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f327ba5db427%3A0x859f570b43a84f1f!2sCalle%20Co.%20-%20Pampang%2C%20A.C.!5e0!3m2!1sen!2sph!4v1757488134875!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Pandi", 
        location: "Bulacan", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.3356867188863!2d120.93471207578462!3d14.862496170609742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ad628828977d%3A0x10d46d769f72be0c!2sCALLE%20Co.%20Pandi%2CBulacan!5e0!3m2!1sen!2sph!4v1757488080361!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Pook 5 Poblacion Loma de Gato", 
        location: "Marilao Bulacan", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.402333291711!2d121.00622857784755!3d14.791021397444455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397af4062eab033%3A0xd101c1391ca3df34!2sCalle%20co%20Loma%20de%20gato!5e0!3m2!1sen!2sph!4v1757494314820!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Rizal Ave. Extension", 
        location: "Olongapo City", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. San Francisco", 
        location: "Binan Laguna", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1932.8120252191745!2d121.05485539540413!3d14.333256964166996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70077a4615b%3A0xb18d9fa7e6a0e033!2sCalle%20Co.%20-%20San%20Francisco%20Bi%C3%B1an%20Branch!5e0!3m2!1sen!2sph!4v1757494278875!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. San Vicente", 
        location: "Urdaneta Pangasinan", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51611.06930692653!2d120.52724972551019!3d15.96055770566781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913f0057a39bbf%3A0x72928f02871cbd17!2sCalle.%20Co%20Coffee%20Shop!5e0!3m2!1sen!2sph!4v1757494701488!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Shopwise", 
        location: "San Fernando, Pampanga", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1362.131896440447!2d120.65431137068701!3d15.065208885344049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f700345c1d8d%3A0xa87b5f89f413bbed!2sCALLE%20Co.%20Shopwise%20SACOP!5e0!3m2!1sen!2sph!4v1757488213978!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Sta. Lucia", 
        location: "Sta Ana, Pampanga", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2290.5210291214808!2d120.76809829091424!3d15.093303286697882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396fb00679a010d%3A0xf26893e3fb41038b!2sCalle%20Co.%20Santa%20Ana!5e0!3m2!1sen!2sph!4v1757494900124!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Tarlac City", 
        location: "Tarlac City", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7690.067540497241!2d120.5805361935791!3d15.4826156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c712d5f99655%3A0x32ed0cf802b1d166!2sCalle%20co.!5e0!3m2!1sen!2sph!4v1757494846582!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Veterans Medical Centre", 
        location: "Quezon City", 
        mapSrc: "" 
    },
    { 
        name: "Calle Co. Villasis Bacag", 
        location: "Pangasinan", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.1506058346516!2d120.58032976961468!3d15.929886388649846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913f0057a39bbf%3A0x72928f02871cbd17!2sCalle.%20Co%20Coffee%20Shop!5e0!3m2!1sen!2sph!4v1757493870042!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Wayne Mart Mamatid, Mabuhay", 
        location: "Cabuyao Laguna", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1367.2752120383054!2d121.14621183722639!3d14.239316623109195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd633d7f982d77%3A0xd75ae406b4494d17!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757494024846!5m2!1sen!2sph" 
    },
    { 
        name: "Calle Co. Xentro Mall", 
        location: "Tumauini, Isabela", 
        mapSrc: "" 
    },
    { 
        name: "Xentro Mall", 
        location: "Cabagan, Isabela", 
        mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4526.930715140434!2d121.77111744300174!3d17.42714709668389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338579a484557e13%3A0x408309885636af84!2sXentroMall%20Cabagan!5e0!3m2!1sen!2sph!4v1757494064540!5m2!1sen!2sph" 
    }
];

        // Generate branch cards
        const branchGrid = document.getElementById('branchGrid');
            branches.forEach(branch => {
                const mapEmbed = branch.mapSrc 
                    ? `<iframe src="${branch.mapSrc}" width="100%" height="200" class="rounded-lg border-2 border-calle-green-light" allowfullscreen loading="lazy"></iframe>`
                    : `<div class="w-full h-48 rounded-lg border-2 border-calle-green-light bg-gray-100 flex items-center justify-center text-gray-400">Map not available</div>`;

                const branchCard = `
                    <div class="branch-card bg-[#346d53] rounded-xl shadow-lg overflow-hidden 
                                border border-gray-200 
                                transition-all duration-300 
                                hover:border-calle-green hover:shadow-xl hover:shadow-calle-green/20 
                                h-[450px] flex flex-col justify-between">
                        <div class="p-6 text-white flex flex-col h-full">
                            <div>
                                <h3 class="text-xl font-semibold mb-3">${branch.name}</h3>
                                <div class="flex items-center text-sm mb-4">
                                    <svg class="w-5 h-5 mr-2 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>${branch.location}</span>
                                </div>
                                <div class="mb-4">${mapEmbed}</div>
                            </div>
                            <div class="mt-auto">
                                <a href="#" target="_blank" class="inline-flex items-center text-white hover:text-gray-200">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.333v21.333C0 23.403.597 24 1.325 24h11.494V14.706h-3.13v-3.62h3.13V8.413c0-3.1 1.893-4.787 4.659-4.787 1.325 0 2.464.097 2.796.141v3.24h-1.918c-1.504 0-1.796.715-1.796 1.765v2.314h3.587l-.467 3.62h-3.12V24h6.116C23.403 24 24 23.403 24 22.667V1.333C24 .597 23.403 0 22.675 0z"/>
                                    </svg>
                                    <span>Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                `;
                branchGrid.innerHTML += branchCard;
            });
