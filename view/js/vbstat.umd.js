! function(t, e) {
	"object" == typeof exports && "undefined" != typeof module ? e(exports, require("@unseenco/e")) : "function" == typeof define && define.amd ? define(["exports", "@unseenco/e"], e) : e((t || self).vbstat = {}, t.E)
}(this, function(t, e) {
	function n(t) {
		return t && "object" == typeof t && "default" in t ? t : {
			default: t
		}
	}
	var r = /*#__PURE__*/ n(e);

	function i() {
		return i = Object.assign || function(t) {
			for (var e = 1; e < arguments.length; e++) {
				var n = arguments[e];
				for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (t[r] = n[r])
			}
			return t
		}, i.apply(this, arguments)
	}

	function o(t, e) {
		(null == e || e > t.length) && (e = t.length);
		for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
		return r
	}

	function a(t, e) {
		var n = "undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"];
		if (n) return (n = n.call(t)).next.bind(n);
		if (Array.isArray(t) || (n = function(t, e) {
				if (t) {
					if ("string" == typeof t) return o(t, e);
					var n = Object.prototype.toString.call(t).slice(8, -1);
					return "Object" === n && t.constructor && (n = t.constructor.name), "Map" === n || "Set" === n ? Array.from(t) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? o(t, e) : void 0
				}
			}(t)) || e && t && "number" == typeof t.length) {
			n && (t = n);
			var r = 0;
			return function() {
				return r >= t.length ? {
					done: !0
				} : {
					done: !1,
					value: t[r++]
				}
			}
		}
		throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
	}
	var c = new DOMParser;

	function s(t) {
		var e = new URL(t, window.location.origin),
			n = null;
		return e.hash.length && (n = t.replace(e.hash, "")), {
			hasHash: e.hash.length > 0,
			pathname: e.pathname,
			host: e.host,
			raw: t,
			href: n || e.href
		}
	}

	function h(t) {
		"HEAD" === t.parentNode.tagName ? document.head.appendChild(u(t)) : document.body.appendChild(u(t))
	}

	function u(t) {
		for (var e = document.createElement("SCRIPT"), n = 0; n < t.attributes.length; n++) {
			var r = t.attributes[n];
			e.setAttribute(r.nodeName, r.nodeValue)
		}
		return t.innerHTML && (e.innerHTML = t.innerHTML), e
	}
	var f = /*#__PURE__*/ function() {
			function t(t) {
				this.wrapper = t.wrapper
			}
			var e = t.prototype;
			return e.leave = function(t) {
				var e = this;
				return new Promise(function(n) {
					e.onLeave(i({}, t, {
						done: n
					}))
				})
			}, e.enter = function(t) {
				var e = this;
				return new Promise(function(n) {
					e.onEnter(i({}, t, {
						done: n
					}))
				})
			}, e.onLeave = function(t) {
				(0, t.done)()
			}, e.onEnter = function(t) {
				(0, t.done)()
			}, t
		}(),
		l = /*#__PURE__*/ function() {
			function t(t) {
				var e = t.page,
					n = t.title,
					r = t.wrapper;
				this._contentString = t.content.outerHTML, this.page = e, this.title = n, this.wrapper = r, this.content = this.wrapper.lastElementChild
			}
			var e = t.prototype;
			return e.onEnter = function() {}, e.onEnterCompleted = function() {}, e.onLeave = function() {}, e.onLeaveCompleted = function() {}, e.initialLoad = function() {
				this.onEnter(), this.onEnterCompleted()
			}, e.update = function() {
				document.title = this.title, this.wrapper.insertAdjacentHTML("beforeend", this._contentString), this.content = this.wrapper.lastElementChild
			}, e.remove = function() {
				this.wrapper.firstElementChild.remove()
			}, e.enter = function(t, e) {
				var n = this;
				return new Promise(function(r) {
					n.onEnter(), t.enter({
						trigger: e,
						to: n.content
					}).then(function() {
						n.onEnterCompleted(), r()
					})
				})
			}, e.leave = function(t, e, n) {
				var r = this;
				return new Promise(function(i) {
					r.onLeave(), t.leave({
						trigger: e,
						from: r.content
					}).then(function() {
						n && r.remove(), r.onLeaveCompleted(), i()
					})
				})
			}, t
		}(),
		d = /*#__PURE__*/ function() {
			function t() {
				this.data = new Map, this.regexCache = new Map
			}
			var e = t.prototype;
			return e.add = function(t, e, n) {
				this.data.has(t) || (this.data.set(t, new Map), this.regexCache.set(t, new RegExp("^" + t + "$"))), this.data.get(t).set(e, n), this.regexCache.set(e, new RegExp("^" + e + "$"))
			}, e.findMatch = function(t, e) {
				for (var n, r = a(this.data); !(n = r()).done;) {
					var i = n.value,
						o = i[1];
					if (t.pathname.match(this.regexCache.get(i[0]))) {
						for (var c, s = a(o); !(c = s()).done;) {
							var h = c.value,
								u = h[1];
							if (e.pathname.match(this.regexCache.get(h[0]))) return u
						}
						break
					}
				}
				return null
			}, t
		}(),
		p = "A transition is currently in progress",
		v = /*#__PURE__*/ function() {
			function t(t) {
				var e = this;
				void 0 === t && (t = {}), this.isTransitioning = !1, this.currentCacheEntry = null, this.cache = new Map, this.onClick = function(t) {
					if (!t.metaKey && !t.ctrlKey) {
						var n = s(t.currentTarget.href);
						if (e.currentLocation = s(window.location.href), e.currentLocation.host !== n.host) return;
						if (e.currentLocation.href !== n.href || e.currentLocation.hasHash && !n.hasHash) return t.preventDefault(), void e.navigateTo(n.raw, t.currentTarget.dataset.transition || !1, t.currentTarget).catch(function(t) {
							return console.warn(t)
						});
						e.currentLocation.hasHash || n.hasHash || t.preventDefault()
					}
				}, this.onPopstate = function() {
					return !(window.location.pathname === e.currentLocation.pathname && !e.isPopping) && (e.allowInterruption || !e.isTransitioning && !e.isPopping ? (e.isPopping || (e.popTarget = window.location.href), e.isPopping = !0, void e.navigateTo(window.location.href, !1, "popstate")) : (window.history.pushState({}, "", e.popTarget), console.warn(p), !1))
				};
				var n = t.links,
					r = void 0 === n ? "a:not([target]):not([href^=\\#]):not([data-vbstat-ignore])" : n,
					i = t.removeOldContent,
					o = void 0 === i || i,
					a = t.allowInterruption,
					c = void 0 !== a && a,
					h = t.renderers,
					u = t.transitions,
					d = void 0 === u ? {
						default: f
					} : u,
					v = t.reloadJsFilter,
					g = void 0 === v ? function(t) {
						return void 0 !== t.dataset.vbstatReload
					} : v;
				this.renderers = void 0 === h ? {
					default: l
				} : h, this.transitions = d, this.defaultRenderer = this.renderers.default || l, this.defaultTransition = this.transitions.default || f, this.wrapper = document.querySelector("[data-vbstat]"), this.reloadJsFilter = g, this.removeOldContent = o, this.allowInterruption = c, this.cache = new Map, this.isPopping = !1, this.attachEvents(r), this.currentLocation = s(window.location.href), this.cache.set(this.currentLocation.href, this.createCacheEntry(document.cloneNode(!0))), this.currentCacheEntry = this.cache.get(this.currentLocation.href), this.currentCacheEntry.renderer.initialLoad()
			}
			var e = t.prototype;
			return e.setDefaultRenderer = function(t) {
				this.defaultRenderer = this.renderers[t]
			}, e.setDefaultTransition = function(t) {
				this.defaultTransition = this.transitions[t]
			}, e.addRoute = function(t, e, n) {
				this.router || (this.router = new d), this.router.add(t, e, n)
			}, e.preload = function(t) {
				var e = this;
				return t = s(t).href, this.cache.has(t) ? Promise.resolve() : this.fetch(t).then(function(n) {
					try {
						return e.cache.set(t, e.createCacheEntry(n)), Promise.resolve()
					} catch (t) {
						return Promise.reject(t)
					}
				})
			}, e.updateCache = function() {
				var t = s(window.location.href).href;
				this.cache.has(t) && (this.cache.delete(t), this.cache.set(t, this.createCacheEntry(document.cloneNode(!0))))
			}, e.clearCache = function(t) {
				var e = s(t || window.location.href).href;
				this.cache.has(e) && this.cache.delete(e)
			}, e.navigateTo = function(t, e, n) {
				var r = this;
				return void 0 === e && (e = !1), void 0 === n && (n = !1), new Promise(function(i, o) {
					if (r.allowInterruption || !r.isTransitioning) {
						r.isTransitioning = !0, r.isPopping = !0, r.targetLocation = s(t), r.popTarget = window.location.href;
						var a = new(r.chooseTransition(e))({
							wrapper: r.wrapper
						});
						r.beforeFetch(r.targetLocation, a, n).then(function() {
							try {
								return r.cache.has(r.targetLocation.href) ? Promise.resolve(r.afterFetch(r.targetLocation, a, r.cache.get(r.targetLocation.href), n)) : Promise.resolve(r.fetch(r.targetLocation.raw).then(function(t) {
									try {
										return Promise.resolve(r.afterFetch(r.targetLocation, a, r.createCacheEntry(t), n))
									} catch (t) {
										return Promise.reject(t)
									}
								}))
							} catch (t) {
								return Promise.reject(t)
							}
						}).then(function() {
							i()
						})
					} else o(new Error(p))
				})
			}, e.on = function(t, e) {
				r.default.on(t, e)
			}, e.off = function(t, e) {
				r.default.off(t, e)
			}, e.beforeFetch = function(t, e, n) {
				var i = this;
				return r.default.emit("NAVIGATE_OUT", {
					from: this.currentCacheEntry,
					trigger: n
				}), new Promise(function(r) {
					i.currentCacheEntry.renderer.leave(e, n, i.removeOldContent).then(function() {
						"popstate" !== n && window.history.pushState({}, "", t.raw), r()
					})
				})
			}, e.afterFetch = function(t, e, n, i) {
				var o = this;
				return this.cache.has(t.href) || this.cache.set(t.href, n), this.currentLocation = t, this.popTarget = this.currentLocation.href, new Promise(function(t) {
					n.renderer.update(), r.default.emit("NAVIGATE_IN", {
						from: o.currentCacheEntry,
						to: n,
						trigger: i
					}), o.reloadJsFilter && o.loadScripts(n.scripts), n.renderer.enter(e, i).then(function() {
						r.default.emit("NAVIGATE_END", {
							from: o.currentCacheEntry,
							to: n,
							trigger: i
						}), o.currentCacheEntry = n, o.isTransitioning = !1, o.isPopping = !1, t()
					})
				})
			}, e.loadScripts = function(t) {
				for (var e, n = [].concat(t), r = Array.from(document.querySelectorAll("script")).filter(this.reloadJsFilter), i = 0; i < r.length; i++)
					for (var o = 0; o < n.length; o++)
						if (r[i].outerHTML === n[o].outerHTML) {
							(e = r[i]).parentNode.replaceChild(u(e), e), n.splice(o, 1);
							break
						} for (var c, s = a(n); !(c = s()).done;) h(c.value)
			}, e.attachEvents = function(t) {
				r.default.delegate("click", t, this.onClick), r.default.on("popstate", window, this.onPopstate)
			}, e.fetch = function(t) {
				function e(e) {
					return t.apply(this, arguments)
				}
				return e.toString = function() {
					return t.toString()
				}, e
			}(function(t) {
				return new Promise(function(e) {
					fetch(t, {
						mode: "same-origin",
						method: "GET",
						headers: {
							"X-Requested-With": "Vbstat"
						},
						credentials: "same-origin"
					}).then(function(e) {
						return e.ok || (console.warn("Vbstat encountered a non 2xx HTTP status code"), window.location.href = t), e.text()
					}).then(function(t) {
						var n;
						e("string" == typeof(n = t) ? c.parseFromString(n, "text/html") : n)
					}).catch(function(e) {
						console.warn(e), window.location.href = t
					})
				})
			}), e.chooseTransition = function(t) {
				var e;
				if (t) return this.transitions[t];
				var n = null == (e = this.router) ? void 0 : e.findMatch(this.currentLocation, this.targetLocation);
				return n ? this.transitions[n] : this.defaultTransition
			}, e.createCacheEntry = function(t) {
				var e = t.querySelector("[data-vbstat-view]"),
					n = e.dataset.vbstatView.length ? this.renderers[e.dataset.vbstatView] : this.defaultRenderer;
				return {
					page: t,
					content: e,
					scripts: this.reloadJsFilter ? Array.from(t.querySelectorAll("script")).filter(this.reloadJsFilter) : [],
					title: t.title,
					renderer: new n({
						wrapper: this.wrapper,
						title: t.title,
						content: e,
						page: t
					})
				}
			}, t
		}();
	t.Core = v, t.Renderer = l, t.Transition = f
});
//# sourceMappingURL=vbstat.umd.js.map