function csgorandom(element){
	element = $(element);
	
	audio = {
		a: document.createElement('audio'),
		b: document.createElement('audio'),
		c: document.createElement('audio'),
		d: document.createElement('audio'),
		e: document.createElement('audio'),
		f: document.createElement('audio')
	};
	audio.a.src = 'assets/on.wav';
	audio.b.src = 'assets/on.wav';
	audio.c.src = 'assets/on.wav';
	audio.d.src = 'assets/on.wav';
	audio.e.src = 'assets/on.wav';
	audio.f.src = 'assets/on.wav';
	
	return {
		cgr: { debug: false, mute: false, started: false, tape: null, tapeposition: 0, dtime: 0, scrolltime: 0 },
		mute: function(bool){ this.cgr.mute=Boolean(bool); },
		end: function(item){ alert('END'); },
		scroll: function(obj){
			obj.cgr.scrolltime++;
			if(obj.cgr.scrolltime >= (obj.cgr.dtime+1200)){
				obj.cgr.tapeposition = obj.cgr.tapeposition-1;
			}else if(obj.cgr.scrolltime >= (obj.cgr.dtime+900)){
				obj.cgr.tapeposition = obj.cgr.tapeposition-2;
			}else if(obj.cgr.scrolltime >= (obj.cgr.dtime+600)){
				obj.cgr.tapeposition = obj.cgr.tapeposition-3;
			}else{
				obj.cgr.tapeposition = obj.cgr.tapeposition-4;
			}
			
			if(obj.cgr.scrolltime == (obj.cgr.dtime+1200)){
				if(obj.cgr.debug == true) console.log('csgorandom: Scroll tape on 1px (tapeposition: '+obj.cgr.tapeposition+'px)');
			}else if(obj.cgr.scrolltime == (obj.cgr.dtime+900)){
				if(obj.cgr.debug == true) console.log('csgorandom: Scroll tape on 2px (tapeposition: '+obj.cgr.tapeposition+'px)');
			}else if(obj.cgr.scrolltime == (obj.cgr.dtime+600)){
				if(obj.cgr.debug == true) console.log('csgorandom: Scroll tape on 3px (tapeposition: '+obj.cgr.tapeposition+'px)');
			}
			
			if(obj.cgr.tapeposition == -148 || obj.cgr.tapeposition == -1136 || obj.cgr.tapeposition == -1824 || obj.cgr.tapeposition == -2707 || obj.cgr.tapeposition == -3594){
				if(!obj.cgr.mute) audio.a.play();
			}
			if(obj.cgr.tapeposition == -296 || obj.cgr.tapeposition == -1284 || obj.cgr.tapeposition == -1972 || obj.cgr.tapeposition == -2856 || obj.cgr.tapeposition == -3742){
				if(!obj.cgr.mute) audio.b.play();
			}
			if(obj.cgr.tapeposition == -444 || obj.cgr.tapeposition == -1232 || obj.cgr.tapeposition == -2120 || obj.cgr.tapeposition == -3005 || obj.cgr.tapeposition == -3890){
				if(!obj.cgr.mute) audio.c.play();
			}
			if(obj.cgr.tapeposition == -692 || obj.cgr.tapeposition == -1380 || obj.cgr.tapeposition == -2268 || obj.cgr.tapeposition == -3154 || obj.cgr.tapeposition == -4050){
				if(!obj.cgr.mute) audio.d.play();
			}
			if(obj.cgr.tapeposition == -840 || obj.cgr.tapeposition == -1528 || obj.cgr.tapeposition == -2399 || obj.cgr.tapeposition == -3298 || obj.cgr.tapeposition == -4198){
				if(!obj.cgr.mute) audio.e.play();
			}
			if(obj.cgr.tapeposition == -988 || obj.cgr.tapeposition == -1676 || obj.cgr.tapeposition == -2558 || obj.cgr.tapeposition == -3446){
				if(!obj.cgr.mute) audio.f.play();
			}
			
			obj.cgr.tape.css('left',this.cgr.tapeposition+'px');
		},
		start: function(data){
			var obj = this;
			if(obj.cgr.started == false){
				obj.cgr.started = true;
				if(obj.cgr.debug == true) console.log('csgorandom: Start animation!');
				if(!data) data = {};
				obj.cgr.tape = element.children('.tape');
				$.post('opencase.php', data, function(r){
					r = JSON.parse(r);
					obj.cgr.tape.html(r.tape);
					obj.cgr.tapeposition = 0;
					obj.cgr.scrolltime = 0;
					obj.cgr.dtime = r.dtime;

					var scroll1 = setInterval(function(){
						obj.scroll(obj);
						if(obj.cgr.scrolltime >= (obj.cgr.dtime+600)){
							clearInterval(scroll1);
							var scroll2 = setInterval(function(){
								obj.scroll(obj);
								if(obj.cgr.scrolltime >= (obj.cgr.dtime+900)){
									clearInterval(scroll2);
									var scroll3 = setInterval(function(){
										obj.scroll(obj);
										if(obj.cgr.scrolltime >= (obj.cgr.dtime+1100)){
											clearInterval(scroll3);
											var scroll4 = setInterval(function(){
												obj.scroll(obj);
												if(obj.cgr.scrolltime >= (obj.cgr.dtime+1300)){
													clearInterval(scroll4);
													var scroll5 = setInterval(function(){
														obj.scroll(obj);
														if(obj.cgr.scrolltime >= (obj.cgr.dtime+1400)){
															if(obj.cgr.debug == true) console.log('csgorandom: End animation!');
															obj.cgr.started = false;
															obj.end(r.item);
															clearInterval(scroll5);
														}
													}, 8);
												}
											}, 6);
										}
									}, 4);
								}
							}, 2);
						}
					}, 1);
				});
			}else{
				if(obj.cgr.debug == true) console.log('csgorandom: Working now!');
				return false;
			}
		},
		build: function(){
			console.log('*****************************************\r\nTitle: JavaScript CS:GO Case Simulator\r\nAuthor: Nydylier\r\nAuthor page: www.nydylier.pl\r\n*****************************************');
			element.html('<div class="onground"></div><div class="tape"></div>');
		}
	};
}