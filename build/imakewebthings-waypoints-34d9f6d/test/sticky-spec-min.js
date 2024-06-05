"use strict";describe("Waypoint Sticky Shortcut",(function(){var t,e,n,$=window.jQuery,o=$(window);beforeEach((function(){loadFixtures("sticky.html"),t=$(".sticky")})),describe("with default options",(function(){beforeEach((function(){n=jasmine.createSpy("on handler"),e=new Waypoint.Sticky({element:t[0],handler:n})})),afterEach((function(){e&&e.destroy(),o.scrollTop(0)})),describe("on init",(function(){afterEach((function(){e.destroy()})),it("returns an instance of the Waypoint.Sticky class",(function(){expect(e instanceof Waypoint.Sticky).toBeTruthy()})),it("wraps the sticky element on init",(function(){expect(t.parent()).toHaveClass("sticky-wrapper")})),describe("when sticky element is scrolled to",(function(){beforeEach((function(){runs((function(){o.scrollTop(t.offset().top)})),waitsFor((function(){return t.hasClass("stuck")}),"stuck class to apply")})),it("adds/removes stuck class",(function(){runs((function(){o.scrollTop(o.scrollTop()-1)})),waitsFor((function(){return!t.hasClass("stuck")}))})),it("gives the wrapper the same height as the sticky element",(function(){expect(t.parent().height()).toEqual(t.outerHeight())})),it("executes handler option after stuck class applied",(function(){expect(n).toHaveBeenCalled()}))}))})),describe("#destroy",(function(){beforeEach((function(){runs((function(){o.scrollTop(t.offset().top)})),waitsFor((function(){return n.callCount})),runs((function(){e.destroy()}))})),it("unwraps the sticky element",(function(){expect(t.parent()).not.toHaveClass("sticky-wrapper")})),it("removes the stuck class",(function(){expect(t).not.toHaveClass("stuck")}))}))})),describe("with wrapper false",(function(){beforeEach((function(){e=new Waypoint.Sticky({element:t[0],handler:n,wrapper:!1})})),it("does not wrap the sticky element",(function(){expect(t.parent()).not.toHaveClass("sticky-wrapper")})),it("does not unwrap on destroy",(function(){var t=e.wrapper;e.destroy(),expect(t).toBe(e.wrapper)}))}))}));