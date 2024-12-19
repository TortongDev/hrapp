</section>

 <script>
           let aside = document.querySelector('aside');
           let wrapper_content = document.querySelector('.wrapper-content');
           document.querySelector('.bar-slide').addEventListener('click', function(){
              // wrapper-content {
              console.log(wrapper_content);
              
              //     padding-inline-start: 250px;
              if(aside.classList.contains('side-off') === false){
                  aside.classList.add('side-off')
                  wrapper_content.classList.add('wrapper-content-side-start')
              }else{
                  aside.classList.remove('side-off')
                  wrapper_content.classList.remove('wrapper-content-side-start')
  
              }
          })
  
      </script>


</body>
</html>
