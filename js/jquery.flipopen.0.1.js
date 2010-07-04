/*  FlipOpen is an MIT/GPL licensed open book jquery plugin
 *  @author Bob Wadholm (rwadholm@indiana.edu) [http://www.bob.wadholm.com]
 *  @version 0.1 [May 14, 2010]
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$(document).ready(function(){
	
	var numPages = 0;
	var currentPage = 0;
	
	$('.bookPage').each(function(i) {
			var numbering = $(this).attr('name');
			$(this).attr({'id': 'pageNum'+numPages});
			$(this).wrapInner('<div class="content" />').prepend('<span class="pageNumbers">'+ numbering +'</span>');
			numPages++;
	});
	
	
	$('#pageNum'+ currentPage).toggle();
	$('#pageNum'+ (currentPage+1)).toggle();
	
	$('.bookPage:odd').css({'align': 'right'});
		
		
	$('.bookPage:odd').click(function(){
		if(numPages >= (currentPage+3)){
			$('.bookPage').css({'position':'relative'});
			nextPage();
		}
	});
	
	$('.bookPage:even').click(function(){
		if(currentPage >= 2){		
			$('.bookPage').css({'position':'relative'});
			prevPage();
		}
	});
	
	function nextPage(){
		
		$('#pageNum'+ currentPage).css({'position':'relative', 'zIndex':'0'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},500);		
		currentPage = currentPage+1;
		
		$('#pageNum'+ currentPage).css({'position':'relative','zIndex':'1'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},0);
		currentPage = currentPage+1;
		
		$('#pageNum'+ currentPage).css({'position':'relative','zIndex':'1'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},300);
		currentPage = currentPage+1;
		
		$('#pageNum'+ currentPage).css({'right': '0px', 'position':'absolute', 'zIndex':'0'}).animate({
			opacity: 'toggle'
		},500);	
		currentPage = currentPage-1;
	};
	
	
	function prevPage(){
		currentPage = currentPage+1;
		$('#pageNum'+ currentPage).css({'right': '0px', 'position':'absolute', 'zIndex':'0'}).animate({
			opacity: 'toggle'
		},500);
		
		currentPage = currentPage-1;
		$('#pageNum'+ currentPage).css({'position':'relative','zIndex':'1'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},0);
		
		currentPage = currentPage-1;
		$('#pageNum'+ currentPage).css({'position':'relative','zIndex':'1'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},300);
		
		currentPage = currentPage-1;
		$('#pageNum'+ currentPage).css({'position':'relative', 'zIndex':'0'}).animate({
			width: ['toggle', 'swing'],
			opacity: 'toggle'
		},500);				
	};	
});
