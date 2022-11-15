<?php include'include/header.php'; 
include'class1.php'; 
$class1= new class1();
$story_data= $class1->get_story();
$event_data= $class1->get_all_event();
$verified_news= $class1->get_all_verified_post();

?>

<!-- design start here -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-12">
				<!-- first section starts here -->
				<section style="background-color: #027c70;padding:10px;height: 1000px;" class="section1">
					<h2 style="color: white;background-color: red; padding: 10px;border-radius: 8px;">Top Stories</h2>
					<ul style="color: white;">
						<?php
						if($story_data==0)
						{
							?>
				       		 <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">No Post found</a></li>

							<?php
						}
						else
						{
							foreach ($story_data as $key) {
								?>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href="story_in_detail.php?sid=<?php echo $key['id']; ?>"> <?php  echo $key['heading']; ?></a></li>


								<?php
							}
						}

						?>
				    </ul>



				    <h2 style="border-style:solid;background-color:#fcff00;color: red;border-color: red; padding: 10px;border-radius: 8px;">Trending News</h2>
					<ul style="color: white;">
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>
				        <li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">Guru Purnima</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Chath puja</a></li>
				        <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href=""> Diwali News</a></li>

				    </ul>
				</section>
				<!-- //First section ends here -->
			</div>
			<div  class="col-sm-6 col-12 ">
				<!-- Second section ends here -->


				<?php
				if($verified_news==0)
				{
					?>
					<section class="section2 ">
					<div style="border-radius: 8px;" class="shadow border border-primary p-3">
						<h2>Heading of the news</h2>
						<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEg8TEBAVDxUVEA8QEBUQEBUVFxAQFREWFhUXFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGi0fHyUtLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBgcEBQj/xABUEAABAwIDBAYFBggKBgsAAAABAAIDBBEFEiEGBxMxIkFRYXGBFDJSkZI0dIKhs9EWQlRzorHB4RUjNVNicpPC0vEzQ4OEtPAIFyU2REVjZJSV0//EABsBAAMBAQEBAQAAAAAAAAAAAAECAwAEBQYH/8QAPBEAAQMCAwUFBQYEBwAAAAAAAQACEQMEEiExBRNBUWEicYGR0RQyobHwBiNCYnLBFTNS8TSSorLC0uH/2gAMAwEAAhEDEQA/AMhSSSXeuNJJJSRROd6ov/z2orKNJehFhw/Hd5N+9dccUbeTQey+v61QUncclM1BwzXjNaTyF/DVSikkPKN3wle2JiOWngEm1R7VQUG8SkNUnQLx/Q5P5t3wlKSBw5scPFpC92OpPauoTqu4aRkUm/cNQqmSnAVqcGO9djXd5AKgkweJ3q3jPcbj3H70ptzwMrC4bxEfFV2yQC9KowaRvq2kHa3n8P3LhLbKRY4aiFYPB0UaeykSyBCEZUdkg1SZO1JwWhCVGmUiVkEVHZOjshsssmskQnATkLIygsmIREJ1lkCFGkQshCFCUVkkCEyjQkqQhBIND4FJCIXq4hs3WQMfJPSyRMY9kcjnAWZI5rXNa6x0uHNPmFJS7JV8rA+KjlkaYmzNLGg3idfK4AG5Byn3LaNssdZSMqDPGJqebE4KarYW3LoH4VESW/0gWtPlZPTUDY4xFA30wCkg9DqAWjhU/DyxuEunDOdsriR3eA5X3Ba0HDK6WUg4xKwd+GzCLjuic2LjGnLyLATBuYsIOodYHSy64tmax3Cy0zzxITURXyjiQC13tuRcDMPetZ2joosTjEVO5r2SY9EJ5WHoOEeGj0mRpGgHRfr1nxXNtDiVPX01f6FVNqpKZs09NF6NJHwKF9N6LPGwu9cZCXgj8a2lk+96JMAWSVuHTQ/6WN0fTfH0vbYGl4HbYPZ3dILlXfiuLy1AgEpB4MLIGWFrtbpmdrq8gNBPXlC4FYKRjgkkBdFGwuNguyOMN8espmtlKTCGCnA1dr3D9q6+JoAOiobpMbdXblopOz1UokSJIshJASZrrdGUIU5doufMpiLiyCJmuqJkpWwFOwEqcvUbUwYAbqoU9V0NkUpqLWXKCop3m4WxQthXrQ1Q8P2oKmCOX1hY+0Of71wZ76jsHvClimT45yOaTBBkLz6zDnR6+s32h+3sXO1WSGbqOvivPxDDLXfHy5lvZ3juU30eLFVtacnLziEJCcFGpaqsKGyVkeVPlSwjKjskpC1b9hGBUhp6YmkgJNPCSTTxkkmNpJJtqV4+2Nrs2a1jnMLsRIyIGkc+9dFCiaxMGIXz4Uy2p9fh4xAUH8GQ58wbxOBDl1g4vK1+Wi9TaGloqSnkqHUEEgZku1lPCCc0jWaEj+ldeY77Sua+mw2zpqAFoxNzDtPNVFpIJxjLXI8FgBSstfqtoMPZS09V/BUbmTPmjAENPdj43EWOlullcR4K10GFUE0UUrKOnLZI45Gn0aL1XNBF+j3oXP2ldbtD6tuQCSPfac2mCMuIRbZ4zDXjyK+dCmWzYPjGHVL6psWFxZYIppnSGCnyvawkNsLX6ViR4LyGbZ4adRg7T4QU5/ursZtW7e9zG2jpbEjGzKRIlT3DBnvB5FZgUxC+gdnaahrKdk7cPgiDnvGV9NFcZXlutm9drrN952ynok3HhblgmPJosIZrXLQOpp1I8x1BLZbfp3F0bWow035jMgyRwy48ueiapbFjMYMhURMQpCEJC96Fzr3v4dpLyE4aw52lvyh5Db8yAWkA94tpoop8XpHX/wCzWAWLQPSZNOzkNT13PWvFTEKZYE2Ir2JsWpC1wbh4jvmsW1ct23ddtgbjQacteaMYxRjlhreZuTVS+qTewta2ml+5eCQmQwhbEUwTpJIoL02MDBp/mVEXIpnKElXJ4KTeqMFPG/sUYKd2iEoxKkkfcoY32KDvUrQLae+ywzWOS6LogVE0nr1RgqqnCnYUrqNjuakaE8yEsIJDqOrrRiQFt+X7CiXNMLEX0HVZA5LDNS8UWIH+SFj1EE4SymhdsMi7oJ15QBH1FdUJNr9V7KzHlSc0JsToRrIwafjAdXeO5eYFYoZOo+BXlYjSZHXHqn1e7tC1Wn+II0n/AISuZMnaic1SVFERoV9G4J8npPm8H2TV87Eae9fROC/J6b8xB9k1fDfbb+VQ/U75Bens33neH7rNqn/vG384z/gFbt5v8m1X+w/4iNVjaLAsRGKSVlJTCUB0bonPkiyuPozY3XaZGu9odS9GuhxSroa2KqpWRyH0X0dsboxntMHSXPEcBYNHMjzXn1W0n1bKuKtOGMotcMbcUh2eU8JzmAMyrDEG1GEHPFGWWi4cKwz0nZ/IBd7TUTx9ueOZ7rDxGYeag2e2myYJUjN/GQk00eutpv8ARkeGZ/8AZq47A4bLT0MMU8fDe10xc0ua6wdK5w1aSORHWs5xTYKvE88dPCTA6ozMdxYg3Jc5CWl9+iHuHLtXRbV7S6r3FvcVGtYK29aSRBh3aEzxbGh80r2vY1r2tM4YKse7/CuFhdZM4WdPFUuH5lkTms+vOfpKu7vsYrIIpm0tCaxrpGueQXDI7IABoOzVarNh4ZSPp4W3y0j4IxoL2iLW6nt0Wa7N4fjdCx7IKNlnuD3cV8LjmDbaWlCnZ31K8p3bqhpy97CG1HYRAmMwQchAyMLPpOplkTkCJAlahhFRJJDE+aLgSOYHSR/zbj1JYvhsdTDJBM3MyRuU9o7HNPUQbEHuUGzctU6nYa1jYpryZ2sy2AznL6rnD1bda9NfJVyaNw7AQCHGMJkCDlhPEDgeS729pufxXzXj+DyUk8kEvrMOhAsJGH1Xt7iPcbjqXnELdt4+y3psGeIfx8ILo7c5Gc3R+fMd47ysJX6psXardoW4effGTh15jode+RwXjXFE0nRw4ISmRlCQvWKigIQ2RlCQlIWQpJ0yVFdTkJKJ8gCjMiqYSBGE7ddAo8ynibbmsFnKRrbd6cocycFUScV6RpWgkWv9K/6kvR2ez9Z+9X/dJTMkrJhIxsg9GebPaHC/Ej1setXnaPHcNopWxT0oLnMEg4dNE4ZS4jmba9Er5plSs5mM1SPEr7SuLWlX3LbYPPQN9FhHBb7H604ib2D3n71uVPheFYrC8wwsaQcrnRRiKWN1ri9gL+dwVktZhrqasdTvIcWTMZe2j2l7S0272kG3eg+pcNg7wkH8x9U9u2yrFzTQa1zcyC0eg+S8cxNPV+kUPozD+Lf6Tj+1fRW0DqKjhdNNSxlgcxpyQRk3c6w0Nl4eGY7hFc8U4pmBzr5GzU0bc5AvZrhfXTtBVCawMGsZ7z6rlZVtnMLxaAtHENb/ANViYhbpZoFuz/NCYGdlvMq87x9kWUTo5IL8GUltnEkwvAvlDjqWkXIvqLFXjdjh0L8PgdJDG9xdPd0kbXE2lcBqR4JGvuS8sNRwjqfVdFY2LKArtotcCY91o59OixMAWtYdnMoQ0a2H61sTtusHBI9E5Ej5LD1fSVd232noKmnEdLBw5OKx5cYI2dAB1xdhv1hZ1aqATvj/AJj6rMpUXPDXWYAPEtED/SqEHdw/5808rswyuAIuNLdakoaV0skcTPWe6ONvi5wAP1r6Ih2epWxti9HiIEYjuYmXIDctybXujRq3NQH7xwH6neqF62wtS2aDCT+Voy8l82ejs7B7ynMLfZ+sruxahdTzTQu5xPkjuesB2h8xY+a0Hc1RRyem8SNklvR7cRjXWvxb2vy5BTZXrufg3jvM+q6Li3s6NE1dywgR+FvGOnVZfwG+yPeV7cW01YxrWsqZGgANaMw0aBYAX7l37w6YNxOqZGwAZoGsYxoHSdBFYNaOsk/WtMwDZ+mw+hLqpkbnBpmnc9jX2db1G3GttGgDmfFK5j7gltQ4gP6s485hSqutKFNlQUWy+IADZzE8uErJvwqrvyuT4gm/Cqu/LJPiC6ocQFViUDzGGNdVUzWsa1oYyPjNAaQBYm3PtJKv+9vD4Y6OMxwxxn0loJZG1pI4UulwFzizpFhcGjL8qtUdRZVp0nUhLu7LOOWcLNjtVXflb/en/Cqu/LJfiC0ndJQRSUTjJFHIfSHi8kbXm3Dj0uRyVX3p7MinmE8TMsUxNw0WEcoGosOQcNR3h3cs6xphgeGjyCVle2dcGgaQBEiYGceCrv4U13VVy/EEhtTXflkvxBWLdDTMkq5hIxsg9GeQHtDhfix62Kj3uUzI62MRsbG30WB1mNDRfizXNh4BD2OkKePC3yCcGgbn2fdCYmYHKdIXg/hTXflkvxBN+Fdd+WSfGFouxexVPDTiqrmtc4s4uWX1II7XBc06F1tSTy5DtM43i4aXcM07xHy4hgiyeJbmzAfRv3JxYUgAXhonoFzuuKTnFtGhjjUgCPkVmn4U135XL8QVYxcEvL3HM57nOeTbVx1J07brY942x0HANXRsbHlyvlbEbMkjcR02gaAi4OmhF1j+Jfi+Mn91ddjR3FyGtAE6wNRC57029xYuq02AERwAIMjl0XmJFOUl9CvlQo0xRlChCKAhCiISskWRSHVHGwW1Uc/PyUhksB18rJuOa2cIndWnWFJdRO8bJmv7fq1TgpSFNdO06qMFE06oystc3NfLZ/msn2kasW8DYqorqiOSF8TGthYwiR72nMHuPJrDp0gq7ua+Wz/NX/aRrt3sYzUwVUTYKiWJpp2OLY5HNBdxHi9h16BfM08It+1zX2Ny2q7aRFIgGOIkaKybGbN/wXDUPlk4jnZXPELXuDWxg2DWgZnHpO6uzRZVi2J+lV7py3IHVEQa082tBDW377NF++6ue6vaSqmqHwzyvnYYXyAyHMY3Nc0etzscx0PYFw7zcPjixGmdGA0y8GSQDS7xKW5vMAe5M+HUmlmQBWtg6nePZVze5uo0iJiIHIeSv+8HCpaqifDA3O8yROALg3RrwTqfBUTZPd5WR1UEtQ1kTI5Gym0gcXFuoADe+1yTyV82+xeWko3zQkNeJImgubmFnOsdPNUXZjePVyVEEdRw3slfHGcseRzC92VpBBsdSNCFSru94MUyuSz9q9kdug3DnPPQT8FNvgx2J7YqWNwe5sjpJC03DTlcwMJ9rpEkdVh2q1bqf5Np/wCvUfbOVa3wYHE2OOqjYGPMnCkygDiXY5zXEDm4ZbX7D3Ky7qf5Np/69R9s5Zk+0GeXotWwfw1mD+rPvzn/AM6KnSbpKgkn0mHUk+q/rPgqrtbs0+gkjjfI2QvYHgsBAAzFttfBKbaquDnWrJxqf9e/tXm4hiM07g6eV8rgMoMji4gXvYErje6kR2QQV7NCndh4NV4Legg/IK3bo8L4tZxXC7aeMvH5x/QZ9Wc+QV/m2ltizKTN0DTFp+cu/jB+g39Jc26jC+DQiRws6Z7pdf5sdFnloXfSRy7D07qr0v0qUSccT6OisCHBwb6t8tgBz5Lspsc2m3DzkrxbqvSqXNQ1DkAWtynP0mVTN8OFcOqjnaNJ2AO/OR2ab+LSz4V6m4//AMw/3X9Uyse9DDBPQSOaLuhIqG29loIf+g5x8gq5uQ/8f/u365khZhuB1VxX3mzHA6tgfEQrHHshfE5q6YtcwiMwMF7iRsbGZn300yki3bfqVK3sbRvkmNI0FjIiC8kW4kpaCDb2QDp2kk9QXu122ktNi8sE0l6bNDGGlrRwi+KNwfmAuRmcb3PInsU+9LZkTxelRNvLC08QAXMkA16uZbqR3E9yaoA5jhT55qduXUrik64zBaMJ4DLLy+ZlZfsp8sofndN9s1arvl+Qx/OW/ZSrKtlfltD87pvtmrVd8vyGP5y37KVRpfyXrtvP8dR+uKfc58hd85k+ziXfFPFikFdSy2D4p54XW5tySu4MrfhHm1wXBuc+Qv8AnUn2cSoVJjrqHFaqUXLDV1TJmj8aMzvvp2g2I8O9Wx4KbJ0ORXE63Na5r4PeBlvfOnivc3U0L4MRq4ZRldHTyMcO8SxajuIsR3Fc+9lgdiNO06h0FK094M8wK0ynwyJ1SytjIJfTGJxbylYXMex1+6x947FmW9uQNxGAnkKemefBs0p/Ylq08FKOEqlpce0XoqcS0+cEfNXberIW4dMGm13wMNvZMguPqWMYbgtTUAup6d8oacrjG2+V1r2Pktn3lwumw2Yx9O3Cm01vG1wcSPK58llWzO19RQteyAR2c8OdxWOcb5Q3SzglucO8GLSFXZRqC1O6ALsXExqG6rvqX42KcxSMnEDYSx7XQDKIWtsQXZb2AHO91QcS/F8X/wB1fSD6x02FPlfbNJhz5H5RYZnU5JsD1ar5wxP8X6f6wr0GYblmZOuvcuatX3tjW7DWwW+6InMa+S88oEaEr3F8umKEoigKyITFBZSFR3SlFTvF1A+O2o18VMSmuiRKzSU0TiRcowouXLlzUJcf2pS6EcMrsCkbzXCyU311XW14PIpgZQLS1ahuzxeClq5ZKiQRNMDmBxBPSL4yBoD1A+5XjFMYwOoeH1Ekcrg0MBcybRoJNtB3lYY3EB1tt9JEK5vsn4l4bLa5Y3DgkeHqvqri52fWq77fFp6SP+K2uHazBqJrvRWgucNRBE7M+3IF7wBbxKzjG8ffV1jZ5RkAkjDWg3EcTXXAv1nUkntJVeFY32T8QUjaxvsn4kXWt28AYIHh6oULvZtBxcKkuPEzPh2fVazvE2opKmhkignErzJCQ0NeLhrwSbloHJZjhE3Cnp5CNI5YpD4MkDj9QUAq2+yT9L9yUeJx+wfiRfY3L3Yi2PrvRttobPoUjTbUkHoeIjktT3i4/RVdHkgqWvkZKyVrckgzgXa4XLbXs4nyU277amjpqGGKaoEb2umLmljzYOlc4cmnqIWZNq47XMZ9/wC5Sx10Psn4gugWNyX48PRcZvdnChud4YmdDyjktLJ2dOuWLtPQn+5eFtfHhLoGNoeGyUzRNLmtl6MRJDycw5Dn5KtxVcHsn4guuOoputp9/wC5V/hVdwiGhTbteypuDhWeY/Uf2V22o2qpG4fJT0koe4wtp42tDxaM2Y43IA0bdZFwDzsfcrlBLSEgEH6l6McVD1k/UtV2NXeQSR4JrTb+z7VpaxxzM56/IL2ditrKVtBHT1coY5jZIC1zHnNFc5OQOmUgeS8jdtidNRyVzZpg1rnRNhc4PdxGMdL0tBpoW8+1StpsPP4zvgChnZh7TbM4+QRGy68t6dCoHbGziHgPID8yOUGcslWdu6llRX1MsLuJG/g5XAEZrQxtOhF+bSFe9hduIRTCGul4b4rMYXNc7iRW6N7A6jkb9gPWq9K+i6jfzC5ZJaXqaff+5Zux7hri4EZqtXbmzq1JtJzjlEGDOQjlx+tFFiDKSLEoZaaYPgNRBMbB4ENpgXtsR6vWLdWnUrNvN2jpaqlZHTzCVwna8gNeLNEcgv0gO0KqSTU/sn3hc0k8Ps/WFM7KuGhzQBmqDa9g99N7qhlmQyOff2Vdt2m0lJS0jo55xE4zyPALXnoljADcAjqKznHZQ+pqXsOZr6id7D7THSuLT5ghdMk8XZ+l+5c76iPsPxfuUKmzbktDY0+ua6aG1Nnsqvqipm7XIx4dlX/dvtrFDC6Csk4YjN4XuDj0DzZ0QeR5dxt1Kv7zsVhqqtklPIJWinhjLgCOkJJSRqB1OHvVZfUs9n9IfcoXVTfZPxD7kjrK6LMBbl4eqNO92cyua7akEzlBjPXgtG2H3gMijbTVoORoyxSAZrM6mSN5kDkCL6aEaXXsvpdnnO4maAX1yiaRrf7IG3lZY46sb7J94+5Rurm+y73rC2ugILJjnHqg6vs4vL6dYsJ1iY/2rWNrN4VMKd9NQtzAxGEvyFkcUZblIY0gFxtoNAPHksgxLq8ZP1tUprW+yfiH3Lkqp85GlrKlvb19+19RsAd3LvUbq4smWb6VB0l0c5OY6clzICjKAr1184mKEoihKyKZCiKFKUVISgBTlMigmmdYeK5gpp+pQhTdqqN0RImcxZRo0qZbnub2eo6qikkqKWKdwqpGB0kYcQ0RxkC56rk+9VfetskKGpEkDMtPPcsDRpFKB0ox2D8YfS7FeP8Ao+/ydN89l+yiXtSSwY1S4hTOsySGpqKZ3WYpopXCGQdxAB+IKQqltQk6JsALIWX7nsLgqa2VlRCydgpZHhsrQ4BwkjANj12J96W+PDYaasjZTQsgb6Ix5bE0NBcZJBew69B7l6e5mkfDilVFK3I+OmnjeOxzZogfEdh6wuffx8uj+Ys+1lVwfv8Aw/ZSj7rxWkVGz2FU9Nx6ijgaxkTHyO4GYgEDWzQSdT1KvjHdmP5qH/4E3/5q3bSYZJVYbJBDlzyU8bWZzZt+idTY25diyYbosS/9v/bu/wAChSwEdtxHj/dUqSPdaPJelPW4VNieGikiifTuzwzsNO5jTI+4jJa9ouQS3VHvp2dgpoqOalgZBeZ8UnCYG5i5mZt7dmR3vWfVlNLR1D43ZeLBKL5SS3iMIcLGwuL2W2b04hVYNLKyxs2nq2f1czS4/A5ytUGBzCDl3/XNTZDg4EZqj7mMAjqpKuSpibNHGyONjZG5m8R5zE2PWA0fEubezgraSrYYGCKKWFrmtYLASNJa+w6tMh81c93NsPwSSre25c2orXC/rgDLGAe9rGfEo99FI2egpaqPUMlY6/8A6M7bA/Fw/eg2oTX6afBF9Nu606oN0uzsE1EZ6iBkznzyCMyNBLY2gMsL/wBIOXg4RhPp+ITxxWhgD5XksA6MLX5Who5XOn1laBhZ9CwZjvVLKMyf7SRpeB8T1n+67GY6apc2ZwYyWMR53HRrw4FuY9QPSF+2ypSc8io8HPgpVGMljHAdVeq/+CsOyRyRNLy24Bj4ry3ldxN7DQqJ+A4ZikT30wbE4HLnhaWOjktcB8egI5cxr1HrQbc7EPrH8enlaJMjWOZJfK5ovYtcL2Nj2W8FnMr8Uwh8pDX0zZXNBfkZIx+W4Z07OaD0jpoUjGh7Q5rzj6lO7suIcwYe5eFi1PLTzTQS+vG8sdbkbciO4gg+a5DUO7VJieIyVEsk0zs8jy0vdYDMWtDRoAByaFx3XcCYz1XMWtUhmPah4p7UBKElaVsIRGUpi8oUJQlGE5cUJKSYlApoTEoSU5SSohAUxTlMSlKKZAiKBKikUJRFMCsmTlnag0ScgQnohCNIJFMsinIuCuVdKCVnMpHCcwmaVCnamSSJ19Df9H7+Tpvnsv2USz7BNpnYfjdfKSeC+urIqkdsZqX2cB2tOvhcdatm5HaKjpqCVlTVwU7zVyODZpmMcWmOMA2ceWh9yy7H5WvrK97HB7X1tW9jmm4ex07i1zSOYIN7qdNuJ7gdE1QlrRC+lIsCj9ObXxEfxlI6CW3+tu+N0bwfBpHeMvYsl38fL4/mLPtZV726TbqFtOaWsnZCYbcB80jWB8J5Mu482nTwI7FVd8+JQ1FZG+nmjnaKNjC6F7XgOEkptdp56jTvRotc2rBS1CHMyWv7VV8lPhk00L+HIymjcx1gcp6I5OBB5rF/+sjFfy0/2MH+Ba/VY5hdRS+jz11MWPhYyRoq2NOgGlw64Nwq3+DWzX5VD/8AZH/GhSc1oIc2fBGoCdDHisjra2SeSSWZ2eSR2Z7rAZnW52Gg8luewxFdgvAJF+BUUTr9VgWsv9FzCsx3gYfh8ElOMNkbIx0bzKWVHGs8OGW5ubaXVh3MbSwUwroaqeOnaZIp4zNI1gcXMyPALjqQGMV6/apAgKdLs1IK9ve5O2kwqmo4zbO6CAW0/ioGhxPvawea6Ni2jEsCNMXAOEclIT7DozeE+TeGVQ98e0EdXWQtglZNFDAAHRvDmmWRxL7EaHRsY969bcxj0VN6VHUzMhY8MmYZXhjc7ei4Xdpcgt0/oqW7O5ka6py8byDporhvarBFQsibpxZY4wB1RxgvP1tYPNZngOzdTWCT0ZjX5MufM9rbZr258+RXv72MciqZqZtPKyZkcTnF0Tw9ueR1rXGlwGD4l5Ow20/oE7nOaXxSNDJgLXsDdrm35kXOnYSuqg17KEsGeq5apa6tDtNFLFj9fhj3w8Ut4ds0TyJGNu0OAbfkLEeqQtC2D2ubisdRFUQNa9jWCVo6UcrH5hcB3L1TcG/VqufE6fBcVtK+pY15aAS2cQyFo5B7H87d4SpcTwfB4pBBMyRzuk5scommlcB0QbGzR42AuVzVntqD3e33LopMcw+9Le/gsq26wllHXVMEfqAsfGL3ysewOy+RJHgAq+SvQ2jxh9ZUz1DxlMjgQ0G+RgaGtbfuAHndeZddrJDQDqud0SYTkpISUrpkEiUySYlCUUikmJTJUUihTlJBZC5CUV0BQKITFCiJQlKiExQEoimKyZCUKclMprKVyFG4IU6CSTuR80ydBFcacJkTW3UQqqaGK/NdQUbG2CO6u0QFFxkogUQKFIJ5SqRE1RtUjEwSlSBQVHrHyXQ1RSREnQdnWs5YIYWXIC9Hh3bl8FHTxZR39anBVGCAkcZKNosEM7+QHX+pGFxSy6k+Q8E5MBIBJQTuue0DTxUaSSlKsBCe6ZNdK60rJ010kxKBKyV010xKSWUU6EprpXWWTEpFyYlNdLKMJygREoQjqimcmKIoClK0pkJRISEpCZCUyRSSIrpIQEJ4pL6Hn+tEQqpdFGknISsgsCuMjVTwtsglbqugBTa3NO45IgUkgE4CqplOEYTAIgEwQRNRhAApAmCUowpQowjanSFSBOw6nuskExIbck9d0wSKSWQAa9i85z7pTz5j3dQUd1NzpVWthEnQXSulTI0kF011lkV090OZNdZFFdCSkUN1loT3SumuhulWREoEk10EU6dvIoSUr6IhAhOSgKIoSUEUiUBKRKFITKZJJJJKikpo5e33pJIgwUCjsmsnSVEiF8d0g3tSSWRRAIgEySyBUgCcJJJwgjCNqSSYJVI1G1JJMlKUkobz8guGWYu5+QSSSPcdEzBlKG6V0kkioldK6SSyyV0kkllk10rpkllk90xKSSyyZNdJJBFMSmJSSQKya6RSSRCxSugc66SSQlEBCkkklRSSSSWWX//Z">

						<span>Posted On- 11-11-2022</span>
						<hr>
						<p>No post remaining for today...<a href="">See More</a></p>
					</div>
				</section>
					<?php
				}

				else
				{

					foreach ($verified_news as $key ) {
						?>



						<section class="section2 ">
					<div style="border-radius: 8px;" class="shadow border border-primary p-3">
						<h2><?php echo $key['heading']; ?></h2>
						<img src="news_pics/<?php echo $key['photo'];  ?>">

						<span>Posted On- <?php echo $key['postdate'];  ?></span>
						<hr>
						<p><?php  echo $key['content']; ?><a href="">See More</a></p>
					</div>
				</section>








						<?php
					}
				}

				?>
				
				<!-- Second section ends here -->
			</div>
			<div class="col-sm-3 col-12">
				<!-- Third section starts here -->
				<section style="background-color: #027c70;padding:10px;height: 1000px;" class="section3">
					<h2 style="color: white;background-color: #0493df; padding: 10px;border-radius: 8px;">Filter News</h2>
						<hr>

					<a href=""><span style="background-color: #fd7501; border-radius: 50px; padding: 15px; padding: 10px;border-radius: 12px;"> Location</span></a>
					<a href=""><span style="background-color: #234572; border-radius: 50px; padding: 15px; padding: 10px;border-radius: 12px;"> Date</span></a>
					<a href=""><span style="background-color: #0162fe; border-radius: 50px; padding: 15px; padding: 10px;border-radius: 12px;"> Event</span></a>


					<hr>
					<h2 style="color: white;background-color: #f0f158; color:red; padding: 10px;border-radius: 8px;"> Events</h2>
					<ul style="color: white;">

						<?php
						if($event_data==0)
						{
							?>
				        	<li> <i class="fa-solid fa-arrow-right"></i>&emsp; <a href="">No data</a></li>

							<?php
						}
						else
						{
							foreach ($event_data as $key) {
								?>
				       		 <li><i class="fa-solid fa-arrow-right"></i>&emsp; <a href="event_in_detail.php?id=<?php echo $key['id']; ?>"> <?php echo $key['heading']; ?></a></li>

							<?php
							}


							
						}
						?>
				    </ul>
				</section>
				<!-- Third section ends here -->
			</div>
		</div>
	</div>

<!-- //design ends here -->

<?php include'include/footer.php'; ?>