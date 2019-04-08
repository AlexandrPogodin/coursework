<script>
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(100, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);
    var geometry = new THREE.CylinderGeometry(<?= $r * 2 ?>, <?= $r * 2 ?>, <?= $h ?>, 32);
    var material = new THREE.MeshBasicMaterial({
        color: 0xFF5722,
        wireframe: true
    });
    var cylinder = new THREE.Mesh(geometry, material);
    scene.add(cylinder);
    //var controls = new THREE.OrbitControls(camera, renderer.domElement);
    
    camera.position.z = 20;

    function render() {
        requestAnimationFrame(render);
        cylinder.rotation.z += 0.001;
        cylinder.rotation.y += 0.01;
        renderer.render(scene, camera);
    }
    render();
</script>