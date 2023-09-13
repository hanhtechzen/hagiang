! function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.Scrollbar = e() : t.Scrollbar = e()
}(this, (function() {
    return function(t) {
        var e = {};
        function i(a) {
            if (e[a]) return e[a].exports;
            var s = e[a] = {
                i: a,
                l: !1,
                exports: {}
            };
            return t[a].call(s.exports, s, s.exports, i), s.l = !0, s.exports
        }
        return i.m = t, i.c = e, i.d = function(t, e, a) {
            i.o(t, e) || Object.defineProperty(t, e, {
                enumerable: !0,
                get: a
            })
        }, i.r = function(t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(t, "__esModule", {
                value: !0
            })
        }, i.t = function(t, e) {
            if (1 & e && (t = i(t)), 8 & e) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var a = Object.create(null);
            if (i.r(a), Object.defineProperty(a, "default", {
                    enumerable: !0,
                    value: t
                }), 2 & e && "string" != typeof t)
                for (var s in t) i.d(a, s, function(e) {
                    return t[e]
                }.bind(null, s));
            return a
        }, i.n = function(t) {
            var e = t && t.__esModule ? function() {
                return t.default
            } : function() {
                return t
            };
            return i.d(e, "a", e), e
        }, i.o = function(t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, i.p = "", i(i.s = 67)
    }([function(t, e, i) {
        (function(e) {
            var i = function(t) {
                return t && t.Math == Math && t
            };
            t.exports = i("object" == typeof globalThis && globalThis) || i("object" == typeof window && window) || i("object" == typeof self && self) || i("object" == typeof e && e) || Function("return this")()
        }).call(this, i(43))
    }, function(t, e, i) {
        var a = i(0),
            s = i(51),
            n = i(3),
            r = i(29),
            o = i(56),
            l = i(76),
            c = s("wks"),
            h = a.Symbol,
            d = l ? h : h && h.withoutSetter || r;
        t.exports = function(t) {
            return n(c, t) || (o && n(h, t) ? c[t] = h[t] : c[t] = d("Symbol." + t)), c[t]
        }
    }, function(t, e) {
        t.exports = function(t) {
            return "object" == typeof t ? null !== t : "function" == typeof t
        }
    }, function(t, e) {
        var i = {}.hasOwnProperty;
        t.exports = function(t, e) {
            return i.call(t, e)
        }
    }, function(t, e) {
        t.exports = function(t) {
            try {
                return !!t()
            } catch (t) {
                return !0
            }
        }
    }, function(t, e, i) {
        var a = i(6),
            s = i(46),
            n = i(7),
            r = i(25),
            o = Object.defineProperty;
        e.f = a ? o : function(t, e, i) {
            if (n(t), e = r(e, !0), n(i), s) try {
                return o(t, e, i)
            } catch (t) {}
            if ("get" in i || "set" in i) throw TypeError("Accessors not supported");
            return "value" in i && (t[e] = i.value), t
        }
    }, function(t, e, i) {
        var a = i(4);
        t.exports = !a((function() {
            return 7 != Object.defineProperty({}, 1, {
                get: function() {
                    return 7
                }
            })[1]
        }))
    }, function(t, e, i) {
        var a = i(2);
        t.exports = function(t) {
            if (!a(t)) throw TypeError(String(t) + " is not an object");
            return t
        }
    }, function(t, e, i) {
        var a = i(6),
            s = i(5),
            n = i(14);
        t.exports = a ? function(t, e, i) {
            return s.f(t, e, n(1, i))
        } : function(t, e, i) {
            return t[e] = i, t
        }
    }, function(t, e, i) {
        var a, s, n, r = i(50),
            o = i(0),
            l = i(2),
            c = i(8),
            h = i(3),
            d = i(27),
            u = i(16),
            p = o.WeakMap;
        if (r) {
            var g = new p,
                f = g.get,
                x = g.has,
                v = g.set;
            a = function(t, e) {
                return v.call(g, t, e), e
            }, s = function(t) {
                return f.call(g, t) || {}
            }, n = function(t) {
                return x.call(g, t)
            }
        } else {
            var m = d("state");
            u[m] = !0, a = function(t, e) {
                return c(t, m, e), e
            }, s = function(t) {
                return h(t, m) ? t[m] : {}
            }, n = function(t) {
                return h(t, m)
            }
        }
        t.exports = {
            set: a,
            get: s,
            has: n,
            enforce: function(t) {
                return n(t) ? s(t) : a(t, {})
            },
            getterFor: function(t) {
                return function(e) {
                    var i;
                    if (!l(e) || (i = s(e)).type !== t) throw TypeError("Incompatible receiver, " + t + " required");
                    return i
                }
            }
        }
    }, function(t, e, i) {
        var a = i(0);
        t.exports = a
    }, function(t, e, i) {
        var a = i(0),
            s = i(8),
            n = i(3),
            r = i(26),
            o = i(48),
            l = i(9),
            c = l.get,
            h = l.enforce,
            d = String(String).split("String");
        (t.exports = function(t, e, i, o) {
            var l = !!o && !!o.unsafe,
                c = !!o && !!o.enumerable,
                u = !!o && !!o.noTargetGet;
            "function" == typeof i && ("string" != typeof e || n(i, "name") || s(i, "name", e), h(i).source = d.join("string" == typeof e ? e : "")), t !== a ? (l ? !u && t[e] && (c = !0) : delete t[e], c ? t[e] = i : s(t, e, i)) : c ? t[e] = i : r(e, i)
        })(Function.prototype, "toString", (function() {
            return "function" == typeof this && c(this).source || o(this)
        }))
    }, function(t, e) {
        t.exports = {}
    }, function(t, e, i) {
        var a = i(0),
            s = i(44).f,
            n = i(8),
            r = i(11),
            o = i(26),
            l = i(70),
            c = i(54);
        t.exports = function(t, e) {
            var i, h, d, u, p, g = t.target,
                f = t.global,
                x = t.stat;
            if (i = f ? a : x ? a[g] || o(g, {}) : (a[g] || {}).prototype)
                for (h in e) {
                    if (u = e[h], d = t.noTargetGet ? (p = s(i, h)) && p.value : i[h], !c(f ? h : g + (x ? "." : "#") + h, t.forced) && void 0 !== d) {
                        if (typeof u == typeof d) continue;
                        l(u, d)
                    }(t.sham || d && d.sham) && n(u, "sham", !0), r(i, h, u, t)
                }
        }
    }, function(t, e) {
        t.exports = function(t, e) {
            return {
                enumerable: !(1 & t),
                configurable: !(2 & t),
                writable: !(4 & t),
                value: e
            }
        }
    }, function(t, e, i) {
        var a = i(22),
            s = i(24);
        t.exports = function(t) {
            return a(s(t))
        }
    }, function(t, e) {
        t.exports = {}
    }, function(t, e, i) {
        var a = i(31),
            s = Math.min;
        t.exports = function(t) {
            return t > 0 ? s(a(t), 9007199254740991) : 0
        }
    }, function(t, e, i) {
        var a = i(16),
            s = i(2),
            n = i(3),
            r = i(5).f,
            o = i(29),
            l = i(75),
            c = o("meta"),
            h = 0,
            d = Object.isExtensible || function() {
                return !0
            },
            u = function(t) {
                r(t, c, {
                    value: {
                        objectID: "O" + ++h,
                        weakData: {}
                    }
                })
            },
            p = t.exports = {
                REQUIRED: !1,
                fastKey: function(t, e) {
                    if (!s(t)) return "symbol" == typeof t ? t : ("string" == typeof t ? "S" : "P") + t;
                    if (!n(t, c)) {
                        if (!d(t)) return "F";
                        if (!e) return "E";
                        u(t)
                    }
                    return t[c].objectID
                },
                getWeakData: function(t, e) {
                    if (!n(t, c)) {
                        if (!d(t)) return !0;
                        if (!e) return !1;
                        u(t)
                    }
                    return t[c].weakData
                },
                onFreeze: function(t) {
                    return l && p.REQUIRED && d(t) && !n(t, c) && u(t), t
                }
            };
        a[c] = !0
    }, function(t, e, i) {
        var a = i(77);
        t.exports = function(t, e, i) {
            if (a(t), void 0 === e) return t;
            switch (i) {
                case 0:
                    return function() {
                        return t.call(e)
                    };
                case 1:
                    return function(i) {
                        return t.call(e, i)
                    };
                case 2:
                    return function(i, a) {
                        return t.call(e, i, a)
                    };
                case 3:
                    return function(i, a, s) {
                        return t.call(e, i, a, s)
                    }
            }
            return function() {
                return t.apply(e, arguments)
            }
        }
    }, function(t, e, i) {
        var a = i(24);
        t.exports = function(t) {
            return Object(a(t))
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(13),
            s = i(0),
            n = i(54),
            r = i(11),
            o = i(18),
            l = i(33),
            c = i(35),
            h = i(2),
            d = i(4),
            u = i(60),
            p = i(36),
            g = i(78);
        t.exports = function(t, e, i) {
            var f = -1 !== t.indexOf("Map"),
                x = -1 !== t.indexOf("Weak"),
                v = f ? "set" : "add",
                m = s[t],
                b = m && m.prototype,
                y = m,
                w = {},
                A = function(t) {
                    var e = b[t];
                    r(b, t, "add" == t ? function(t) {
                        return e.call(this, 0 === t ? 0 : t), this
                    } : "delete" == t ? function(t) {
                        return !(x && !h(t)) && e.call(this, 0 === t ? 0 : t)
                    } : "get" == t ? function(t) {
                        return x && !h(t) ? void 0 : e.call(this, 0 === t ? 0 : t)
                    } : "has" == t ? function(t) {
                        return !(x && !h(t)) && e.call(this, 0 === t ? 0 : t)
                    } : function(t, i) {
                        return e.call(this, 0 === t ? 0 : t, i), this
                    })
                };
            if (n(t, "function" != typeof m || !(x || b.forEach && !d((function() {
                    (new m).entries().next()
                }))))) y = i.getConstructor(e, t, f, v), o.REQUIRED = !0;
            else if (n(t, !0)) {
                var k = new y,
                    S = k[v](x ? {} : -0, 1) != k,
                    C = d((function() {
                        k.has(1)
                    })),
                    L = u((function(t) {
                        new m(t)
                    })),
                    P = !x && d((function() {
                        for (var t = new m, e = 5; e--;) t[v](e, e);
                        return !t.has(-0)
                    }));
                L || ((y = e((function(e, i) {
                    c(e, y, t);
                    var a = g(new m, e, y);
                    return null != i && l(i, a[v], a, f), a
                }))).prototype = b, b.constructor = y), (C || P) && (A("delete"), A("has"), f && A("get")), (P || S) && A(v), x && b.clear && delete b.clear
            }
            return w[t] = y, a({
                global: !0,
                forced: y != m
            }, w), p(y, t), x || i.setStrong(y, t, f), y
        }
    }, function(t, e, i) {
        var a = i(4),
            s = i(23),
            n = "".split;
        t.exports = a((function() {
            return !Object("z").propertyIsEnumerable(0)
        })) ? function(t) {
            return "String" == s(t) ? n.call(t, "") : Object(t)
        } : Object
    }, function(t, e) {
        var i = {}.toString;
        t.exports = function(t) {
            return i.call(t).slice(8, -1)
        }
    }, function(t, e) {
        t.exports = function(t) {
            if (null == t) throw TypeError("Can't call method on " + t);
            return t
        }
    }, function(t, e, i) {
        var a = i(2);
        t.exports = function(t, e) {
            if (!a(t)) return t;
            var i, s;
            if (e && "function" == typeof(i = t.toString) && !a(s = i.call(t))) return s;
            if ("function" == typeof(i = t.valueOf) && !a(s = i.call(t))) return s;
            if (!e && "function" == typeof(i = t.toString) && !a(s = i.call(t))) return s;
            throw TypeError("Can't convert object to primitive value")
        }
    }, function(t, e, i) {
        var a = i(0),
            s = i(8);
        t.exports = function(t, e) {
            try {
                s(a, t, e)
            } catch (i) {
                a[t] = e
            }
            return e
        }
    }, function(t, e, i) {
        var a = i(51),
            s = i(29),
            n = a("keys");
        t.exports = function(t) {
            return n[t] || (n[t] = s(t))
        }
    }, function(t, e) {
        t.exports = !1
    }, function(t, e) {
        var i = 0,
            a = Math.random();
        t.exports = function(t) {
            return "Symbol(" + String(void 0 === t ? "" : t) + ")_" + (++i + a).toString(36)
        }
    }, function(t, e, i) {
        var a = i(10),
            s = i(0),
            n = function(t) {
                return "function" == typeof t ? t : void 0
            };
        t.exports = function(t, e) {
            return arguments.length < 2 ? n(a[t]) || n(s[t]) : a[t] && a[t][e] || s[t] && s[t][e]
        }
    }, function(t, e) {
        var i = Math.ceil,
            a = Math.floor;
        t.exports = function(t) {
            return isNaN(t = +t) ? 0 : (t > 0 ? a : i)(t)
        }
    }, function(t, e) {
        t.exports = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"]
    }, function(t, e, i) {
        var a = i(7),
            s = i(55),
            n = i(17),
            r = i(19),
            o = i(57),
            l = i(59),
            c = function(t, e) {
                this.stopped = t, this.result = e
            };
        (t.exports = function(t, e, i, h, d) {
            var u, p, g, f, x, v, m, b = r(e, i, h ? 2 : 1);
            if (d) u = t;
            else {
                if ("function" != typeof(p = o(t))) throw TypeError("Target is not iterable");
                if (s(p)) {
                    for (g = 0, f = n(t.length); f > g; g++)
                        if ((x = h ? b(a(m = t[g])[0], m[1]) : b(t[g])) && x instanceof c) return x;
                    return new c(!1)
                }
                u = p.call(t)
            }
            for (v = u.next; !(m = v.call(u)).done;)
                if ("object" == typeof(x = l(u, b, m.value, h)) && x && x instanceof c) return x;
            return new c(!1)
        }).stop = function(t) {
            return new c(!0, t)
        }
    }, function(t, e, i) {
        var a = {};
        a[i(1)("toStringTag")] = "z", t.exports = "[object z]" === String(a)
    }, function(t, e) {
        t.exports = function(t, e, i) {
            if (!(t instanceof e)) throw TypeError("Incorrect " + (i ? i + " " : "") + "invocation");
            return t
        }
    }, function(t, e, i) {
        var a = i(5).f,
            s = i(3),
            n = i(1)("toStringTag");
        t.exports = function(t, e, i) {
            t && !s(t = i ? t : t.prototype, n) && a(t, n, {
                configurable: !0,
                value: e
            })
        }
    }, function(t, e, i) {
        var a, s = i(7),
            n = i(80),
            r = i(32),
            o = i(16),
            l = i(81),
            c = i(47),
            h = i(27)("IE_PROTO"),
            d = function() {},
            u = function(t) {
                return "<script>" + t + "<\/script>"
            },
            p = function() {
                try {
                    a = document.domain && new ActiveXObject("htmlfile")
                } catch (t) {}
                p = a ? function(t) {
                    t.write(u("")), t.close();
                    var e = t.parentWindow.Object;
                    return t = null, e
                }(a) : function() {
                    var t, e = c("iframe");
                    return e.style.display = "none", l.appendChild(e), e.src = String("javascript:"), (t = e.contentWindow.document).open(), t.write(u("document.F=Object")), t.close(), t.F
                }();
                for (var t = r.length; t--;) delete p.prototype[r[t]];
                return p()
            };
        o[h] = !0, t.exports = Object.create || function(t, e) {
            var i;
            return null !== t ? (d.prototype = s(t), i = new d, d.prototype = null, i[h] = t) : i = p(), void 0 === e ? i : n(i, e)
        }
    }, function(t, e, i) {
        var a = i(11);
        t.exports = function(t, e, i) {
            for (var s in e) a(t, s, e[s], i);
            return t
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(13),
            s = i(82),
            n = i(65),
            r = i(61),
            o = i(36),
            l = i(8),
            c = i(11),
            h = i(1),
            d = i(28),
            u = i(12),
            p = i(64),
            g = p.IteratorPrototype,
            f = p.BUGGY_SAFARI_ITERATORS,
            x = h("iterator"),
            v = function() {
                return this
            };
        t.exports = function(t, e, i, h, p, m, b) {
            s(i, e, h);
            var y, w, A, k = function(t) {
                    if (t === p && T) return T;
                    if (!f && t in L) return L[t];
                    switch (t) {
                        case "keys":
                        case "values":
                        case "entries":
                            return function() {
                                return new i(this, t)
                            }
                    }
                    return function() {
                        return new i(this)
                    }
                },
                S = e + " Iterator",
                C = !1,
                L = t.prototype,
                P = L[x] || L["@@iterator"] || p && L[p],
                T = !f && P || k(p),
                E = "Array" == e && L.entries || P;
            if (E && (y = n(E.call(new t)), g !== Object.prototype && y.next && (d || n(y) === g || (r ? r(y, g) : "function" != typeof y[x] && l(y, x, v)), o(y, S, !0, !0), d && (u[S] = v))), "values" == p && P && "values" !== P.name && (C = !0, T = function() {
                    return P.call(this)
                }), d && !b || L[x] === T || l(L, x, T), u[e] = T, p)
                if (w = {
                        values: k("values"),
                        keys: m ? T : k("keys"),
                        entries: k("entries")
                    }, b)
                    for (A in w) !f && !C && A in L || c(L, A, w[A]);
                else a({
                    target: e,
                    proto: !0,
                    forced: f || C
                }, w);
            return w
        }
    }, function(t, e, i) {
        var a = i(34),
            s = i(11),
            n = i(85);
        a || s(Object.prototype, "toString", n, {
            unsafe: !0
        })
    }, function(t, e, i) {
        "use strict";
        var a = i(86).charAt,
            s = i(9),
            n = i(39),
            r = s.set,
            o = s.getterFor("String Iterator");
        n(String, "String", (function(t) {
            r(this, {
                type: "String Iterator",
                string: String(t),
                index: 0
            })
        }), (function() {
            var t, e = o(this),
                i = e.string,
                s = e.index;
            return s >= i.length ? {
                value: void 0,
                done: !0
            } : (t = a(i, s), e.index += t.length, {
                value: t,
                done: !1
            })
        }))
    }, function(t, e, i) {
        var a = i(0),
            s = i(87),
            n = i(88),
            r = i(8),
            o = i(1),
            l = o("iterator"),
            c = o("toStringTag"),
            h = n.values;
        for (var d in s) {
            var u = a[d],
                p = u && u.prototype;
            if (p) {
                if (p[l] !== h) try {
                    r(p, l, h)
                } catch (t) {
                    p[l] = h
                }
                if (p[c] || r(p, c, d), s[d])
                    for (var g in n)
                        if (p[g] !== n[g]) try {
                            r(p, g, n[g])
                        } catch (t) {
                            p[g] = n[g]
                        }
            }
        }
    }, function(t, e) {
        var i;
        i = function() {
            return this
        }();
        try {
            i = i || new Function("return this")()
        } catch (t) {
            "object" == typeof window && (i = window)
        }
        t.exports = i
    }, function(t, e, i) {
        var a = i(6),
            s = i(45),
            n = i(14),
            r = i(15),
            o = i(25),
            l = i(3),
            c = i(46),
            h = Object.getOwnPropertyDescriptor;
        e.f = a ? h : function(t, e) {
            if (t = r(t), e = o(e, !0), c) try {
                return h(t, e)
            } catch (t) {}
            if (l(t, e)) return n(!s.f.call(t, e), t[e])
        }
    }, function(t, e, i) {
        "use strict";
        var a = {}.propertyIsEnumerable,
            s = Object.getOwnPropertyDescriptor,
            n = s && !a.call({
                1: 2
            }, 1);
        e.f = n ? function(t) {
            var e = s(this, t);
            return !!e && e.enumerable
        } : a
    }, function(t, e, i) {
        var a = i(6),
            s = i(4),
            n = i(47);
        t.exports = !a && !s((function() {
            return 7 != Object.defineProperty(n("div"), "a", {
                get: function() {
                    return 7
                }
            }).a
        }))
    }, function(t, e, i) {
        var a = i(0),
            s = i(2),
            n = a.document,
            r = s(n) && s(n.createElement);
        t.exports = function(t) {
            return r ? n.createElement(t) : {}
        }
    }, function(t, e, i) {
        var a = i(49),
            s = Function.toString;
        "function" != typeof a.inspectSource && (a.inspectSource = function(t) {
            return s.call(t)
        }), t.exports = a.inspectSource
    }, function(t, e, i) {
        var a = i(0),
            s = i(26),
            n = a["__core-js_shared__"] || s("__core-js_shared__", {});
        t.exports = n
    }, function(t, e, i) {
        var a = i(0),
            s = i(48),
            n = a.WeakMap;
        t.exports = "function" == typeof n && /native code/.test(s(n))
    }, function(t, e, i) {
        var a = i(28),
            s = i(49);
        (t.exports = function(t, e) {
            return s[t] || (s[t] = void 0 !== e ? e : {})
        })("versions", []).push({
            version: "3.6.4",
            mode: a ? "pure" : "global",
            copyright: "Â© 2020 Denis Pushkarev (zloirock.ru)"
        })
    }, function(t, e, i) {
        var a = i(3),
            s = i(15),
            n = i(73).indexOf,
            r = i(16);
        t.exports = function(t, e) {
            var i, o = s(t),
                l = 0,
                c = [];
            for (i in o) !a(r, i) && a(o, i) && c.push(i);
            for (; e.length > l;) a(o, i = e[l++]) && (~n(c, i) || c.push(i));
            return c
        }
    }, function(t, e) {
        e.f = Object.getOwnPropertySymbols
    }, function(t, e, i) {
        var a = i(4),
            s = /#|\.prototype\./,
            n = function(t, e) {
                var i = o[r(t)];
                return i == c || i != l && ("function" == typeof e ? a(e) : !!e)
            },
            r = n.normalize = function(t) {
                return String(t).replace(s, ".").toLowerCase()
            },
            o = n.data = {},
            l = n.NATIVE = "N",
            c = n.POLYFILL = "P";
        t.exports = n
    }, function(t, e, i) {
        var a = i(1),
            s = i(12),
            n = a("iterator"),
            r = Array.prototype;
        t.exports = function(t) {
            return void 0 !== t && (s.Array === t || r[n] === t)
        }
    }, function(t, e, i) {
        var a = i(4);
        t.exports = !!Object.getOwnPropertySymbols && !a((function() {
            return !String(Symbol())
        }))
    }, function(t, e, i) {
        var a = i(58),
            s = i(12),
            n = i(1)("iterator");
        t.exports = function(t) {
            if (null != t) return t[n] || t["@@iterator"] || s[a(t)]
        }
    }, function(t, e, i) {
        var a = i(34),
            s = i(23),
            n = i(1)("toStringTag"),
            r = "Arguments" == s(function() {
                return arguments
            }());
        t.exports = a ? s : function(t) {
            var e, i, a;
            return void 0 === t ? "Undefined" : null === t ? "Null" : "string" == typeof(i = function(t, e) {
                try {
                    return t[e]
                } catch (t) {}
            }(e = Object(t), n)) ? i : r ? s(e) : "Object" == (a = s(e)) && "function" == typeof e.callee ? "Arguments" : a
        }
    }, function(t, e, i) {
        var a = i(7);
        t.exports = function(t, e, i, s) {
            try {
                return s ? e(a(i)[0], i[1]) : e(i)
            } catch (e) {
                var n = t.return;
                throw void 0 !== n && a(n.call(t)), e
            }
        }
    }, function(t, e, i) {
        var a = i(1)("iterator"),
            s = !1;
        try {
            var n = 0,
                r = {
                    next: function() {
                        return {
                            done: !!n++
                        }
                    },
                    return: function() {
                        s = !0
                    }
                };
            r[a] = function() {
                return this
            }, Array.from(r, (function() {
                throw 2
            }))
        } catch (t) {}
        t.exports = function(t, e) {
            if (!e && !s) return !1;
            var i = !1;
            try {
                var n = {};
                n[a] = function() {
                    return {
                        next: function() {
                            return {
                                done: i = !0
                            }
                        }
                    }
                }, t(n)
            } catch (t) {}
            return i
        }
    }, function(t, e, i) {
        var a = i(7),
            s = i(79);
        t.exports = Object.setPrototypeOf || ("__proto__" in {} ? function() {
            var t, e = !1,
                i = {};
            try {
                (t = Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set).call(i, []), e = i instanceof Array
            } catch (t) {}
            return function(i, n) {
                return a(i), s(n), e ? t.call(i, n) : i.__proto__ = n, i
            }
        }() : void 0)
    }, function(t, e, i) {
        "use strict";
        var a = i(5).f,
            s = i(37),
            n = i(38),
            r = i(19),
            o = i(35),
            l = i(33),
            c = i(39),
            h = i(84),
            d = i(6),
            u = i(18).fastKey,
            p = i(9),
            g = p.set,
            f = p.getterFor;
        t.exports = {
            getConstructor: function(t, e, i, c) {
                var h = t((function(t, a) {
                        o(t, h, e), g(t, {
                            type: e,
                            index: s(null),
                            first: void 0,
                            last: void 0,
                            size: 0
                        }), d || (t.size = 0), null != a && l(a, t[c], t, i)
                    })),
                    p = f(e),
                    x = function(t, e, i) {
                        var a, s, n = p(t),
                            r = v(t, e);
                        return r ? r.value = i : (n.last = r = {
                            index: s = u(e, !0),
                            key: e,
                            value: i,
                            previous: a = n.last,
                            next: void 0,
                            removed: !1
                        }, n.first || (n.first = r), a && (a.next = r), d ? n.size++ : t.size++, "F" !== s && (n.index[s] = r)), t
                    },
                    v = function(t, e) {
                        var i, a = p(t),
                            s = u(e);
                        if ("F" !== s) return a.index[s];
                        for (i = a.first; i; i = i.next)
                            if (i.key == e) return i
                    };
                return n(h.prototype, {
                    clear: function() {
                        for (var t = p(this), e = t.index, i = t.first; i;) i.removed = !0, i.previous && (i.previous = i.previous.next = void 0), delete e[i.index], i = i.next;
                        t.first = t.last = void 0, d ? t.size = 0 : this.size = 0
                    },
                    delete: function(t) {
                        var e = p(this),
                            i = v(this, t);
                        if (i) {
                            var a = i.next,
                                s = i.previous;
                            delete e.index[i.index], i.removed = !0, s && (s.next = a), a && (a.previous = s), e.first == i && (e.first = a), e.last == i && (e.last = s), d ? e.size-- : this.size--
                        }
                        return !!i
                    },
                    forEach: function(t) {
                        for (var e, i = p(this), a = r(t, arguments.length > 1 ? arguments[1] : void 0, 3); e = e ? e.next : i.first;)
                            for (a(e.value, e.key, this); e && e.removed;) e = e.previous
                    },
                    has: function(t) {
                        return !!v(this, t)
                    }
                }), n(h.prototype, i ? {
                    get: function(t) {
                        var e = v(this, t);
                        return e && e.value
                    },
                    set: function(t, e) {
                        return x(this, 0 === t ? 0 : t, e)
                    }
                } : {
                    add: function(t) {
                        return x(this, t = 0 === t ? 0 : t, t)
                    }
                }), d && a(h.prototype, "size", {
                    get: function() {
                        return p(this).size
                    }
                }), h
            },
            setStrong: function(t, e, i) {
                var a = e + " Iterator",
                    s = f(e),
                    n = f(a);
                c(t, e, (function(t, e) {
                    g(this, {
                        type: a,
                        target: t,
                        state: s(t),
                        kind: e,
                        last: void 0
                    })
                }), (function() {
                    for (var t = n(this), e = t.kind, i = t.last; i && i.removed;) i = i.previous;
                    return t.target && (t.last = i = i ? i.next : t.state.first) ? "keys" == e ? {
                        value: i.key,
                        done: !1
                    } : "values" == e ? {
                        value: i.value,
                        done: !1
                    } : {
                        value: [i.key, i.value],
                        done: !1
                    } : (t.target = void 0, {
                        value: void 0,
                        done: !0
                    })
                }), i ? "entries" : "values", !i, !0), h(e)
            }
        }
    }, function(t, e, i) {
        var a = i(52),
            s = i(32);
        t.exports = Object.keys || function(t) {
            return a(t, s)
        }
    }, function(t, e, i) {
        "use strict";
        var a, s, n, r = i(65),
            o = i(8),
            l = i(3),
            c = i(1),
            h = i(28),
            d = c("iterator"),
            u = !1;
        [].keys && ("next" in (n = [].keys()) ? (s = r(r(n))) !== Object.prototype && (a = s) : u = !0), null == a && (a = {}), h || l(a, d) || o(a, d, (function() {
            return this
        })), t.exports = {
            IteratorPrototype: a,
            BUGGY_SAFARI_ITERATORS: u
        }
    }, function(t, e, i) {
        var a = i(3),
            s = i(20),
            n = i(27),
            r = i(83),
            o = n("IE_PROTO"),
            l = Object.prototype;
        t.exports = r ? Object.getPrototypeOf : function(t) {
            return t = s(t), a(t, o) ? t[o] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? l : null
        }
    }, function(t, e, i) {
        "use strict";
        (function(t) {
            var i = "object" == typeof t && t && t.Object === Object && t;
            e.a = i
        }).call(this, i(43))
    }, function(t, e, i) {
        t.exports = i(105)
    }, function(t, e, i) {
        i(69), i(40), i(41), i(42);
        var a = i(10);
        t.exports = a.Map
    }, function(t, e, i) {
        "use strict";
        var a = i(21),
            s = i(62);
        t.exports = a("Map", (function(t) {
            return function() {
                return t(this, arguments.length ? arguments[0] : void 0)
            }
        }), s)
    }, function(t, e, i) {
        var a = i(3),
            s = i(71),
            n = i(44),
            r = i(5);
        t.exports = function(t, e) {
            for (var i = s(e), o = r.f, l = n.f, c = 0; c < i.length; c++) {
                var h = i[c];
                a(t, h) || o(t, h, l(e, h))
            }
        }
    }, function(t, e, i) {
        var a = i(30),
            s = i(72),
            n = i(53),
            r = i(7);
        t.exports = a("Reflect", "ownKeys") || function(t) {
            var e = s.f(r(t)),
                i = n.f;
            return i ? e.concat(i(t)) : e
        }
    }, function(t, e, i) {
        var a = i(52),
            s = i(32).concat("length", "prototype");
        e.f = Object.getOwnPropertyNames || function(t) {
            return a(t, s)
        }
    }, function(t, e, i) {
        var a = i(15),
            s = i(17),
            n = i(74),
            r = function(t) {
                return function(e, i, r) {
                    var o, l = a(e),
                        c = s(l.length),
                        h = n(r, c);
                    if (t && i != i) {
                        for (; c > h;)
                            if ((o = l[h++]) != o) return !0
                    } else
                        for (; c > h; h++)
                            if ((t || h in l) && l[h] === i) return t || h || 0;
                    return !t && -1
                }
            };
        t.exports = {
            includes: r(!0),
            indexOf: r(!1)
        }
    }, function(t, e, i) {
        var a = i(31),
            s = Math.max,
            n = Math.min;
        t.exports = function(t, e) {
            var i = a(t);
            return i < 0 ? s(i + e, 0) : n(i, e)
        }
    }, function(t, e, i) {
        var a = i(4);
        t.exports = !a((function() {
            return Object.isExtensible(Object.preventExtensions({}))
        }))
    }, function(t, e, i) {
        var a = i(56);
        t.exports = a && !Symbol.sham && "symbol" == typeof Symbol.iterator
    }, function(t, e) {
        t.exports = function(t) {
            if ("function" != typeof t) throw TypeError(String(t) + " is not a function");
            return t
        }
    }, function(t, e, i) {
        var a = i(2),
            s = i(61);
        t.exports = function(t, e, i) {
            var n, r;
            return s && "function" == typeof(n = e.constructor) && n !== i && a(r = n.prototype) && r !== i.prototype && s(t, r), t
        }
    }, function(t, e, i) {
        var a = i(2);
        t.exports = function(t) {
            if (!a(t) && null !== t) throw TypeError("Can't set " + String(t) + " as a prototype");
            return t
        }
    }, function(t, e, i) {
        var a = i(6),
            s = i(5),
            n = i(7),
            r = i(63);
        t.exports = a ? Object.defineProperties : function(t, e) {
            n(t);
            for (var i, a = r(e), o = a.length, l = 0; o > l;) s.f(t, i = a[l++], e[i]);
            return t
        }
    }, function(t, e, i) {
        var a = i(30);
        t.exports = a("document", "documentElement")
    }, function(t, e, i) {
        "use strict";
        var a = i(64).IteratorPrototype,
            s = i(37),
            n = i(14),
            r = i(36),
            o = i(12),
            l = function() {
                return this
            };
        t.exports = function(t, e, i) {
            var c = e + " Iterator";
            return t.prototype = s(a, {
                next: n(1, i)
            }), r(t, c, !1, !0), o[c] = l, t
        }
    }, function(t, e, i) {
        var a = i(4);
        t.exports = !a((function() {
            function t() {}
            return t.prototype.constructor = null, Object.getPrototypeOf(new t) !== t.prototype
        }))
    }, function(t, e, i) {
        "use strict";
        var a = i(30),
            s = i(5),
            n = i(1),
            r = i(6),
            o = n("species");
        t.exports = function(t) {
            var e = a(t),
                i = s.f;
            r && e && !e[o] && i(e, o, {
                configurable: !0,
                get: function() {
                    return this
                }
            })
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(34),
            s = i(58);
        t.exports = a ? {}.toString : function() {
            return "[object " + s(this) + "]"
        }
    }, function(t, e, i) {
        var a = i(31),
            s = i(24),
            n = function(t) {
                return function(e, i) {
                    var n, r, o = String(s(e)),
                        l = a(i),
                        c = o.length;
                    return l < 0 || l >= c ? t ? "" : void 0 : (n = o.charCodeAt(l)) < 55296 || n > 56319 || l + 1 === c || (r = o.charCodeAt(l + 1)) < 56320 || r > 57343 ? t ? o.charAt(l) : n : t ? o.slice(l, l + 2) : r - 56320 + (n - 55296 << 10) + 65536
                }
            };
        t.exports = {
            codeAt: n(!1),
            charAt: n(!0)
        }
    }, function(t, e) {
        t.exports = {
            CSSRuleList: 0,
            CSSStyleDeclaration: 0,
            CSSValueList: 0,
            ClientRectList: 0,
            DOMRectList: 0,
            DOMStringList: 0,
            DOMTokenList: 1,
            DataTransferItemList: 0,
            FileList: 0,
            HTMLAllCollection: 0,
            HTMLCollection: 0,
            HTMLFormElement: 0,
            HTMLSelectElement: 0,
            MediaList: 0,
            MimeTypeArray: 0,
            NamedNodeMap: 0,
            NodeList: 1,
            PaintRequestList: 0,
            Plugin: 0,
            PluginArray: 0,
            SVGLengthList: 0,
            SVGNumberList: 0,
            SVGPathSegList: 0,
            SVGPointList: 0,
            SVGStringList: 0,
            SVGTransformList: 0,
            SourceBufferList: 0,
            StyleSheetList: 0,
            TextTrackCueList: 0,
            TextTrackList: 0,
            TouchList: 0
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(15),
            s = i(89),
            n = i(12),
            r = i(9),
            o = i(39),
            l = r.set,
            c = r.getterFor("Array Iterator");
        t.exports = o(Array, "Array", (function(t, e) {
            l(this, {
                type: "Array Iterator",
                target: a(t),
                index: 0,
                kind: e
            })
        }), (function() {
            var t = c(this),
                e = t.target,
                i = t.kind,
                a = t.index++;
            return !e || a >= e.length ? (t.target = void 0, {
                value: void 0,
                done: !0
            }) : "keys" == i ? {
                value: a,
                done: !1
            } : "values" == i ? {
                value: e[a],
                done: !1
            } : {
                value: [a, e[a]],
                done: !1
            }
        }), "values"), n.Arguments = n.Array, s("keys"), s("values"), s("entries")
    }, function(t, e, i) {
        var a = i(1),
            s = i(37),
            n = i(5),
            r = a("unscopables"),
            o = Array.prototype;
        null == o[r] && n.f(o, r, {
            configurable: !0,
            value: s(null)
        }), t.exports = function(t) {
            o[r][t] = !0
        }
    }, function(t, e, i) {
        i(91), i(40), i(41), i(42);
        var a = i(10);
        t.exports = a.Set
    }, function(t, e, i) {
        "use strict";
        var a = i(21),
            s = i(62);
        t.exports = a("Set", (function(t) {
            return function() {
                return t(this, arguments.length ? arguments[0] : void 0)
            }
        }), s)
    }, function(t, e, i) {
        i(40), i(93), i(42);
        var a = i(10);
        t.exports = a.WeakMap
    }, function(t, e, i) {
        "use strict";
        var a, s = i(0),
            n = i(38),
            r = i(18),
            o = i(21),
            l = i(94),
            c = i(2),
            h = i(9).enforce,
            d = i(50),
            u = !s.ActiveXObject && "ActiveXObject" in s,
            p = Object.isExtensible,
            g = function(t) {
                return function() {
                    return t(this, arguments.length ? arguments[0] : void 0)
                }
            },
            f = t.exports = o("WeakMap", g, l);
        if (d && u) {
            a = l.getConstructor(g, "WeakMap", !0), r.REQUIRED = !0;
            var x = f.prototype,
                v = x.delete,
                m = x.has,
                b = x.get,
                y = x.set;
            n(x, {
                delete: function(t) {
                    if (c(t) && !p(t)) {
                        var e = h(this);
                        return e.frozen || (e.frozen = new a), v.call(this, t) || e.frozen.delete(t)
                    }
                    return v.call(this, t)
                },
                has: function(t) {
                    if (c(t) && !p(t)) {
                        var e = h(this);
                        return e.frozen || (e.frozen = new a), m.call(this, t) || e.frozen.has(t)
                    }
                    return m.call(this, t)
                },
                get: function(t) {
                    if (c(t) && !p(t)) {
                        var e = h(this);
                        return e.frozen || (e.frozen = new a), m.call(this, t) ? b.call(this, t) : e.frozen.get(t)
                    }
                    return b.call(this, t)
                },
                set: function(t, e) {
                    if (c(t) && !p(t)) {
                        var i = h(this);
                        i.frozen || (i.frozen = new a), m.call(this, t) ? y.call(this, t, e) : i.frozen.set(t, e)
                    } else y.call(this, t, e);
                    return this
                }
            })
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(38),
            s = i(18).getWeakData,
            n = i(7),
            r = i(2),
            o = i(35),
            l = i(33),
            c = i(95),
            h = i(3),
            d = i(9),
            u = d.set,
            p = d.getterFor,
            g = c.find,
            f = c.findIndex,
            x = 0,
            v = function(t) {
                return t.frozen || (t.frozen = new m)
            },
            m = function() {
                this.entries = []
            },
            b = function(t, e) {
                return g(t.entries, (function(t) {
                    return t[0] === e
                }))
            };
        m.prototype = {
            get: function(t) {
                var e = b(this, t);
                if (e) return e[1]
            },
            has: function(t) {
                return !!b(this, t)
            },
            set: function(t, e) {
                var i = b(this, t);
                i ? i[1] = e : this.entries.push([t, e])
            },
            delete: function(t) {
                var e = f(this.entries, (function(e) {
                    return e[0] === t
                }));
                return ~e && this.entries.splice(e, 1), !!~e
            }
        }, t.exports = {
            getConstructor: function(t, e, i, c) {
                var d = t((function(t, a) {
                        o(t, d, e), u(t, {
                            type: e,
                            id: x++,
                            frozen: void 0
                        }), null != a && l(a, t[c], t, i)
                    })),
                    g = p(e),
                    f = function(t, e, i) {
                        var a = g(t),
                            r = s(n(e), !0);
                        return !0 === r ? v(a).set(e, i) : r[a.id] = i, t
                    };
                return a(d.prototype, {
                    delete: function(t) {
                        var e = g(this);
                        if (!r(t)) return !1;
                        var i = s(t);
                        return !0 === i ? v(e).delete(t) : i && h(i, e.id) && delete i[e.id]
                    },
                    has: function(t) {
                        var e = g(this);
                        if (!r(t)) return !1;
                        var i = s(t);
                        return !0 === i ? v(e).has(t) : i && h(i, e.id)
                    }
                }), a(d.prototype, i ? {
                    get: function(t) {
                        var e = g(this);
                        if (r(t)) {
                            var i = s(t);
                            return !0 === i ? v(e).get(t) : i ? i[e.id] : void 0
                        }
                    },
                    set: function(t, e) {
                        return f(this, t, e)
                    }
                } : {
                    add: function(t) {
                        return f(this, t, !0)
                    }
                }), d
            }
        }
    }, function(t, e, i) {
        var a = i(19),
            s = i(22),
            n = i(20),
            r = i(17),
            o = i(96),
            l = [].push,
            c = function(t) {
                var e = 1 == t,
                    i = 2 == t,
                    c = 3 == t,
                    h = 4 == t,
                    d = 6 == t,
                    u = 5 == t || d;
                return function(p, g, f, x) {
                    for (var v, m, b = n(p), y = s(b), w = a(g, f, 3), A = r(y.length), k = 0, S = x || o, C = e ? S(p, A) : i ? S(p, 0) : void 0; A > k; k++)
                        if ((u || k in y) && (m = w(v = y[k], k, b), t))
                            if (e) C[k] = m;
                            else if (m) switch (t) {
                        case 3:
                            return !0;
                        case 5:
                            return v;
                        case 6:
                            return k;
                        case 2:
                            l.call(C, v)
                    } else if (h) return !1;
                    return d ? -1 : c || h ? h : C
                }
            };
        t.exports = {
            forEach: c(0),
            map: c(1),
            filter: c(2),
            some: c(3),
            every: c(4),
            find: c(5),
            findIndex: c(6)
        }
    }, function(t, e, i) {
        var a = i(2),
            s = i(97),
            n = i(1)("species");
        t.exports = function(t, e) {
            var i;
            return s(t) && ("function" != typeof(i = t.constructor) || i !== Array && !s(i.prototype) ? a(i) && null === (i = i[n]) && (i = void 0) : i = void 0), new(void 0 === i ? Array : i)(0 === e ? 0 : e)
        }
    }, function(t, e, i) {
        var a = i(23);
        t.exports = Array.isArray || function(t) {
            return "Array" == a(t)
        }
    }, function(t, e, i) {
        i(41), i(99);
        var a = i(10);
        t.exports = a.Array.from
    }, function(t, e, i) {
        var a = i(13),
            s = i(100);
        a({
            target: "Array",
            stat: !0,
            forced: !i(60)((function(t) {
                Array.from(t)
            }))
        }, {
            from: s
        })
    }, function(t, e, i) {
        "use strict";
        var a = i(19),
            s = i(20),
            n = i(59),
            r = i(55),
            o = i(17),
            l = i(101),
            c = i(57);
        t.exports = function(t) {
            var e, i, h, d, u, p, g = s(t),
                f = "function" == typeof this ? this : Array,
                x = arguments.length,
                v = x > 1 ? arguments[1] : void 0,
                m = void 0 !== v,
                b = c(g),
                y = 0;
            if (m && (v = a(v, x > 2 ? arguments[2] : void 0, 2)), null == b || f == Array && r(b))
                for (i = new f(e = o(g.length)); e > y; y++) p = m ? v(g[y], y) : g[y], l(i, y, p);
            else
                for (u = (d = b.call(g)).next, i = new f; !(h = u.call(d)).done; y++) p = m ? n(d, v, [h.value, y], !0) : h.value, l(i, y, p);
            return i.length = y, i
        }
    }, function(t, e, i) {
        "use strict";
        var a = i(25),
            s = i(5),
            n = i(14);
        t.exports = function(t, e, i) {
            var r = a(e);
            r in t ? s.f(t, r, n(0, i)) : t[r] = i
        }
    }, function(t, e, i) {
        i(103);
        var a = i(10);
        t.exports = a.Object.assign
    }, function(t, e, i) {
        var a = i(13),
            s = i(104);
        a({
            target: "Object",
            stat: !0,
            forced: Object.assign !== s
        }, {
            assign: s
        })
    }, function(t, e, i) {
        "use strict";
        var a = i(6),
            s = i(4),
            n = i(63),
            r = i(53),
            o = i(45),
            l = i(20),
            c = i(22),
            h = Object.assign,
            d = Object.defineProperty;
        t.exports = !h || s((function() {
            if (a && 1 !== h({
                    b: 1
                }, h(d({}, "a", {
                    enumerable: !0,
                    get: function() {
                        d(this, "b", {
                            value: 3,
                            enumerable: !1
                        })
                    }
                }), {
                    b: 2
                })).b) return !0;
            var t = {},
                e = {},
                i = Symbol();
            return t[i] = 7, "abcdefghijklmnopqrst".split("").forEach((function(t) {
                e[t] = t
            })), 7 != h({}, t)[i] || "abcdefghijklmnopqrst" != n(h({}, e)).join("")
        })) ? function(t, e) {
            for (var i = l(t), s = arguments.length, h = 1, d = r.f, u = o.f; s > h;)
                for (var p, g = c(arguments[h++]), f = d ? n(g).concat(d(g)) : n(g), x = f.length, v = 0; x > v;) p = f[v++], a && !u.call(g, p) || (i[p] = g[p]);
            return i
        } : h
    }, function(t, e, i) {
        "use strict";
        i.r(e);
        var a = {};
        i.r(a), i.d(a, "keyboardHandler", (function() {
            return it
        })), i.d(a, "mouseHandler", (function() {
            return at
        })), i.d(a, "resizeHandler", (function() {
            return st
        })), i.d(a, "selectHandler", (function() {
            return nt
        })), i.d(a, "touchHandler", (function() {
            return rt
        })), i.d(a, "wheelHandler", (function() {
            return ot
        }));
        /*! *****************************************************************************
        Copyright (c) Microsoft Corporation. All rights reserved.
        Licensed under the Apache License, Version 2.0 (the "License"); you may not use
        this file except in compliance with the License. You may obtain a copy of the
        License at http://www.apache.org/licenses/LICENSE-2.0
        THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
        KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
        WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
        MERCHANTABLITY OR NON-INFRINGEMENT.
        See the Apache Version 2.0 License for specific language governing permissions
        and limitations under the License.
        ***************************************************************************** */
        var s = function(t, e) {
                return (s = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(t, e) {
                        t.__proto__ = e
                    } || function(t, e) {
                        for (var i in e) e.hasOwnProperty(i) && (t[i] = e[i])
                    })(t, e)
            },
            n = function() {
                return (n = Object.assign || function(t) {
                    for (var e, i = 1, a = arguments.length; i < a; i++)
                        for (var s in e = arguments[i]) Object.prototype.hasOwnProperty.call(e, s) && (t[s] = e[s]);
                    return t
                }).apply(this, arguments)
            };
        function r(t, e, i, a) {
            var s, n = arguments.length,
                r = n < 3 ? e : null === a ? a = Object.getOwnPropertyDescriptor(e, i) : a;
            if ("object" == typeof Reflect && "function" == typeof Reflect.decorate) r = Reflect.decorate(t, e, i, a);
            else
                for (var o = t.length - 1; o >= 0; o--)(s = t[o]) && (r = (n < 3 ? s(r) : n > 3 ? s(e, i, r) : s(e, i)) || r);
            return n > 3 && r && Object.defineProperty(e, i, r), r
        }
        i(68), i(90), i(92), i(98), i(102);
        var o = /\s/,
            l = /^\s+/,
            c = function(t) {
                var e = typeof t;
                return null != t && ("object" == e || "function" == e)
            },
            h = i(66),
            d = "object" == typeof self && self && self.Object === Object && self,
            u = h.a || d || Function("return this")(),
            p = u.Symbol,
            g = Object.prototype,
            f = g.hasOwnProperty,
            x = g.toString,
            v = p ? p.toStringTag : void 0,
            m = Object.prototype.toString,
            b = p ? p.toStringTag : void 0,
            y = /^[-+]0x[0-9a-f]+$/i,
            w = /^0b[01]+$/i,
            A = /^0o[0-7]+$/i,
            k = parseInt,
            S = function(t) {
                if ("number" == typeof t) return t;
                if (function(t) {
                        return "symbol" == typeof t || function(t) {
                            return null != t && "object" == typeof t
                        }(t) && "[object Symbol]" == function(t) {
                            return null == t ? void 0 === t ? "[object Undefined]" : "[object Null]" : b && b in Object(t) ? function(t) {
                                var e = f.call(t, v),
                                    i = t[v];
                                try {
                                    t[v] = void 0;
                                    var a = !0
                                } catch (t) {}
                                var s = x.call(t);
                                return a && (e ? t[v] = i : delete t[v]), s
                            }(t) : function(t) {
                                return m.call(t)
                            }(t)
                        }(t)
                    }(t)) return NaN;
                if (c(t)) {
                    var e = "function" == typeof t.valueOf ? t.valueOf() : t;
                    t = c(e) ? e + "" : e
                }
                if ("string" != typeof t) return 0 === t ? t : +t;
                t = function(t) {
                    return t ? t.slice(0, function(t) {
                        for (var e = t.length; e-- && o.test(t.charAt(e)););
                        return e
                    }(t) + 1).replace(l, "") : t
                }(t);
                var i = w.test(t);
                return i || A.test(t) ? k(t.slice(2), i ? 2 : 8) : y.test(t) ? NaN : +t
            },
            C = function(t, e, i) {
                return void 0 === i && (i = e, e = void 0), void 0 !== i && (i = (i = S(i)) == i ? i : 0), void 0 !== e && (e = (e = S(e)) == e ? e : 0),
                    function(t, e, i) {
                        return t == t && (void 0 !== i && (t = t <= i ? t : i), void 0 !== e && (t = t >= e ? t : e)), t
                    }(S(t), e, i)
            };
        function L(t, e) {
            return void 0 === t && (t = -1 / 0), void 0 === e && (e = 1 / 0),
                function(i, a) {
                    var s = "_" + a;
                    Object.defineProperty(i, a, {
                        get: function() {
                            return this[s]
                        },
                        set: function(i) {
                            Object.defineProperty(this, s, {
                                value: C(i, t, e),
                                enumerable: !1,
                                writable: !0,
                                configurable: !0
                            })
                        },
                        enumerable: !0,
                        configurable: !0
                    })
                }
        }
        function P(t, e) {
            var i = "_" + e;
            Object.defineProperty(t, e, {
                get: function() {
                    return this[i]
                },
                set: function(t) {
                    Object.defineProperty(this, i, {
                        value: !!t,
                        enumerable: !1,
                        writable: !0,
                        configurable: !0
                    })
                },
                enumerable: !0,
                configurable: !0
            })
        }
        var T = function() {
                return u.Date.now()
            },
            E = Math.max,
            M = Math.min,
            I = function(t, e, i) {
                var a, s, n, r, o, l, h = 0,
                    d = !1,
                    u = !1,
                    p = !0;
                if ("function" != typeof t) throw new TypeError("Expected a function");
                function g(e) {
                    var i = a,
                        n = s;
                    return a = s = void 0, h = e, r = t.apply(n, i)
                }
                function f(t) {
                    var i = t - l;
                    return void 0 === l || i >= e || i < 0 || u && t - h >= n
                }
                function x() {
                    var t = T();
                    if (f(t)) return v(t);
                    o = setTimeout(x, function(t) {
                        var i = e - (t - l);
                        return u ? M(i, n - (t - h)) : i
                    }(t))
                }
                function v(t) {
                    return o = void 0, p && a ? g(t) : (a = s = void 0, r)
                }
                function m() {
                    var t = T(),
                        i = f(t);
                    if (a = arguments, s = this, l = t, i) {
                        if (void 0 === o) return function(t) {
                            return h = t, o = setTimeout(x, e), d ? g(t) : r
                        }(l);
                        if (u) return clearTimeout(o), o = setTimeout(x, e), g(l)
                    }
                    return void 0 === o && (o = setTimeout(x, e)), r
                }
                return e = S(e) || 0, c(i) && (d = !!i.leading, n = (u = "maxWait" in i) ? E(S(i.maxWait) || 0, e) : n, p = "trailing" in i ? !!i.trailing : p), m.cancel = function() {
                    void 0 !== o && clearTimeout(o), h = 0, a = l = s = o = void 0
                }, m.flush = function() {
                    return void 0 === o ? r : v(T())
                }, m
            };
        function z() {
            for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
            return function(e, i, a) {
                var s = a.value;
                return {
                    get: function() {
                        return this.hasOwnProperty(i) || Object.defineProperty(this, i, {
                            value: I.apply(void 0, function() {
                                for (var t = 0, e = 0, i = arguments.length; e < i; e++) t += arguments[e].length;
                                var a = Array(t),
                                    s = 0;
                                for (e = 0; e < i; e++)
                                    for (var n = arguments[e], r = 0, o = n.length; r < o; r++, s++) a[s] = n[r];
                                return a
                            }([s], t))
                        }), this[i]
                    }
                }
            }
        }
        var O, D = function() {
                function t(t) {
                    var e = this;
                    void 0 === t && (t = {}), this.damping = .1, this.thumbMinSize = 20, this.renderByPixels = !0, this.alwaysShowTracks = !1, this.continuousScrolling = !0, this.delegateTo = null, this.plugins = {}, Object.keys(t).forEach((function(i) {
                        e[i] = t[i]
                    }))
                }
                return Object.defineProperty(t.prototype, "wheelEventTarget", {
                    get: function() {
                        return this.delegateTo
                    },
                    set: function(t) {
                        console.warn("[smooth-scrollbar]: `options.wheelEventTarget` is deprecated and will be removed in the future, use `options.delegateTo` instead."), this.delegateTo = t
                    },
                    enumerable: !0,
                    configurable: !0
                }), r([L(0, 1)], t.prototype, "damping", void 0), r([L(0, 1 / 0)], t.prototype, "thumbMinSize", void 0), r([P], t.prototype, "renderByPixels", void 0), r([P], t.prototype, "alwaysShowTracks", void 0), r([P], t.prototype, "continuousScrolling", void 0), t
            }(),
            X = new WeakMap;
        function R() {
            if (void 0 !== O) return O;
            var t = !1;
            try {
                var e = function() {},
                    i = Object.defineProperty({}, "passive", {
                        get: function() {
                            t = !0
                        }
                    });
                window.addEventListener("testPassive", e, i), window.removeEventListener("testPassive", e, i)
            } catch (t) {}
            return O = !!t && {
                passive: !1
            }
        }
        function Y(t) {
            var e = X.get(t) || [];
            return X.set(t, e),
                function(t, i, a) {
                    function s(t) {
                        t.defaultPrevented || a(t)
                    }
                    i.split(/\s+/g).forEach((function(i) {
                        e.push({
                            elem: t,
                            eventName: i,
                            handler: s
                        }), t.addEventListener(i, s, R())
                    }))
                }
        }
        function _(t) {
            var e = function(t) {
                return t.touches ? t.touches[t.touches.length - 1] : t
            }(t);
            return {
                x: e.clientX,
                y: e.clientY
            }
        }
        function F(t, e) {
            return void 0 === e && (e = []), e.some((function(e) {
                return t === e
            }))
        }
        var H = ["webkit", "moz", "ms", "o"],
            N = new RegExp("^-(?!(?:" + H.join("|") + ")-)");
        function W(t, e) {
            e = function(t) {
                var e = {};
                return Object.keys(t).forEach((function(i) {
                    if (N.test(i)) {
                        var a = t[i];
                        i = i.replace(/^-/, ""), e[i] = a, H.forEach((function(t) {
                            e["-" + t + "-" + i] = a
                        }))
                    } else e[i] = t[i]
                })), e
            }(e), Object.keys(e).forEach((function(i) {
                var a = i.replace(/^-/, "").replace(/-([a-z])/g, (function(t, e) {
                    return e.toUpperCase()
                }));
                t.style[a] = e[i]
            }))
        }
        var B, G = function() {
                function t(t) {
                    this.velocityMultiplier = /Android/.test(navigator.userAgent) ? window.devicePixelRatio : 1, this.updateTime = Date.now(), this.delta = {
                        x: 0,
                        y: 0
                    }, this.velocity = {
                        x: 0,
                        y: 0
                    }, this.lastPosition = {
                        x: 0,
                        y: 0
                    }, this.lastPosition = _(t)
                }
                return t.prototype.update = function(t) {
                    var e = this.velocity,
                        i = this.updateTime,
                        a = this.lastPosition,
                        s = Date.now(),
                        n = _(t),
                        r = {
                            x: -(n.x - a.x),
                            y: -(n.y - a.y)
                        },
                        o = s - i || 16.7,
                        l = r.x / o * 16.7,
                        c = r.y / o * 16.7;
                    e.x = l * this.velocityMultiplier, e.y = c * this.velocityMultiplier, this.delta = r, this.updateTime = s, this.lastPosition = n
                }, t
            }(),
            j = function() {
                function t() {
                    this._touchList = {}
                }
                return Object.defineProperty(t.prototype, "_primitiveValue", {
                    get: function() {
                        return {
                            x: 0,
                            y: 0
                        }
                    },
                    enumerable: !0,
                    configurable: !0
                }), t.prototype.isActive = function() {
                    return void 0 !== this._activeTouchID
                }, t.prototype.getDelta = function() {
                    var t = this._getActiveTracker();
                    return t ? n({}, t.delta) : this._primitiveValue
                }, t.prototype.getVelocity = function() {
                    var t = this._getActiveTracker();
                    return t ? n({}, t.velocity) : this._primitiveValue
                }, t.prototype.getEasingDistance = function(t) {
                    var e = 1 - t,
                        i = {
                            x: 0,
                            y: 0
                        },
                        a = this.getVelocity();
                    return Object.keys(a).forEach((function(t) {
                        for (var s = Math.abs(a[t]) <= 10 ? 0 : a[t]; 0 !== s;) i[t] += s, s = s * e | 0
                    })), i
                }, t.prototype.track = function(t) {
                    var e = this,
                        i = t.targetTouches;
                    return Array.from(i).forEach((function(t) {
                        e._add(t)
                    })), this._touchList
                }, t.prototype.update = function(t) {
                    var e = this,
                        i = t.touches,
                        a = t.changedTouches;
                    return Array.from(i).forEach((function(t) {
                        e._renew(t)
                    })), this._setActiveID(a), this._touchList
                }, t.prototype.release = function(t) {
                    var e = this;
                    delete this._activeTouchID, Array.from(t.changedTouches).forEach((function(t) {
                        e._delete(t)
                    }))
                }, t.prototype._add = function(t) {
                    this._has(t) && this._delete(t);
                    var e = new G(t);
                    this._touchList[t.identifier] = e
                }, t.prototype._renew = function(t) {
                    this._has(t) && this._touchList[t.identifier].update(t)
                }, t.prototype._delete = function(t) {
                    delete this._touchList[t.identifier]
                }, t.prototype._has = function(t) {
                    return this._touchList.hasOwnProperty(t.identifier)
                }, t.prototype._setActiveID = function(t) {
                    this._activeTouchID = t[t.length - 1].identifier
                }, t.prototype._getActiveTracker = function() {
                    return this._touchList[this._activeTouchID]
                }, t
            }();
        ! function(t) {
            t.X = "x", t.Y = "y"
        }(B || (B = {}));
        var V = function() {
                function t(t, e) {
                    void 0 === e && (e = 0), this._direction = t, this._minSize = e, this.element = document.createElement("div"), this.displaySize = 0, this.realSize = 0, this.offset = 0, this.element.className = "scrollbar-thumb scrollbar-thumb-" + t
                }
                return t.prototype.attachTo = function(t) {
                    t.appendChild(this.element)
                }, t.prototype.update = function(t, e, i) {
                    this.realSize = Math.min(e / i, 1) * e, this.displaySize = Math.max(this.realSize, this._minSize), this.offset = t / i * (e + (this.realSize - this.displaySize)), W(this.element, this._getStyle())
                }, t.prototype._getStyle = function() {
                    switch (this._direction) {
                        case B.X:
                            return {
                                width: this.displaySize + "px", "-transform": "translate3d(" + this.offset + "px, 0, 0)"
                            };
                        case B.Y:
                            return {
                                height: this.displaySize + "px", "-transform": "translate3d(0, " + this.offset + "px, 0)"
                            };
                        default:
                            return null
                    }
                }, t
            }(),
            $ = function() {
                function t(t, e) {
                    void 0 === e && (e = 0), this.element = document.createElement("div"), this._isShown = !1, this.element.className = "scrollbar-track scrollbar-track-" + t, this.thumb = new V(t, e), this.thumb.attachTo(this.element)
                }
                return t.prototype.attachTo = function(t) {
                    t.appendChild(this.element)
                }, t.prototype.show = function() {
                    this._isShown || (this._isShown = !0, this.element.classList.add("show"))
                }, t.prototype.hide = function() {
                    this._isShown && (this._isShown = !1, this.element.classList.remove("show"))
                }, t.prototype.update = function(t, e, i) {
                    W(this.element, {
                        display: i <= e ? "none" : "block"
                    }), this.thumb.update(t, e, i)
                }, t
            }(),
            U = function() {
                function t(t) {
                    this._scrollbar = t;
                    var e = t.options.thumbMinSize;
                    this.xAxis = new $(B.X, e), this.yAxis = new $(B.Y, e), this.xAxis.attachTo(t.containerEl), this.yAxis.attachTo(t.containerEl), t.options.alwaysShowTracks && (this.xAxis.show(), this.yAxis.show())
                }
                return t.prototype.update = function() {
                    var t = this._scrollbar,
                        e = t.size,
                        i = t.offset;
                    this.xAxis.update(i.x, e.container.width, e.content.width), this.yAxis.update(i.y, e.container.height, e.content.height)
                }, t.prototype.autoHideOnIdle = function() {
                    this._scrollbar.options.alwaysShowTracks || (this.xAxis.hide(), this.yAxis.hide())
                }, r([z(300)], t.prototype, "autoHideOnIdle", null), t
            }(),
            q = new WeakMap;
        function Z(t) {
            return Math.pow(t - 1, 3) + 1
        }
        var K, Q, J, tt = function() {
                function t(t, e) {
                    var i = this.constructor;
                    this.scrollbar = t, this.name = i.pluginName, this.options = n(n({}, i.defaultOptions), e)
                }
                return t.prototype.onInit = function() {}, t.prototype.onDestroy = function() {}, t.prototype.onUpdate = function() {}, t.prototype.onRender = function(t) {}, t.prototype.transformDelta = function(t, e) {
                    return n({}, t)
                }, t.pluginName = "", t.defaultOptions = {}, t
            }(),
            et = {
                order: new Set,
                constructors: {}
            };
        function it(t) {
            var e = Y(t),
                i = t.containerEl;
            e(i, "keydown", (function(e) {
                var a = document.activeElement;
                if ((a === i || i.contains(a)) && ! function(t) {
                        return !("INPUT" !== t.tagName && "SELECT" !== t.tagName && "TEXTAREA" !== t.tagName && !t.isContentEditable || t.disabled)
                    }(a)) {
                    var s = function(t, e) {
                        var i = t.size,
                            a = t.limit,
                            s = t.offset;
                        switch (e) {
                            case K.TAB:
                                return function(t) {
                                    requestAnimationFrame((function() {
                                        t.scrollIntoView(document.activeElement, {
                                            offsetTop: t.size.container.height / 2,
                                            onlyScrollIfNeeded: !0
                                        })
                                    }))
                                }(t);
                            case K.SPACE:
                                return [0, 200];
                            case K.PAGE_UP:
                                return [0, 40 - i.container.height];
                            case K.PAGE_DOWN:
                                return [0, i.container.height - 40];
                            case K.END:
                                return [0, a.y - s.y];
                            case K.HOME:
                                return [0, -s.y];
                            case K.LEFT:
                                return [-40, 0];
                            case K.UP:
                                return [0, -40];
                            case K.RIGHT:
                                return [40, 0];
                            case K.DOWN:
                                return [0, 40];
                            default:
                                return null
                        }
                    }(t, e.keyCode || e.which);
                    if (s) {
                        var n = s[0],
                            r = s[1];
                        t.addTransformableMomentum(n, r, e, (function(i) {
                            i ? e.preventDefault() : (t.containerEl.blur(), t.parent && t.parent.containerEl.focus())
                        }))
                    }
                }
            }))
        }
        function at(t) {
            var e, i, a, s, n, r = Y(t),
                o = t.containerEl,
                l = t.track,
                c = l.xAxis,
                h = l.yAxis;
            function d(e, i) {
                var a = t.size,
                    s = t.limit,
                    n = t.offset;
                if (e === Q.X) {
                    var r = a.container.width + (c.thumb.realSize - c.thumb.displaySize);
                    return C(i / r * a.content.width, 0, s.x) - n.x
                }
                if (e === Q.Y) {
                    var o = a.container.height + (h.thumb.realSize - h.thumb.displaySize);
                    return C(i / o * a.content.height, 0, s.y) - n.y
                }
                return 0
            }
            function u(t) {
                return F(t, [c.element, c.thumb.element]) ? Q.X : F(t, [h.element, h.thumb.element]) ? Q.Y : void 0
            }
            r(o, "click", (function(e) {
                if (!i && F(e.target, [c.element, h.element])) {
                    var a = e.target,
                        s = u(a),
                        n = a.getBoundingClientRect(),
                        r = _(e);
                    if (s === Q.X) {
                        var o = r.x - n.left - c.thumb.displaySize / 2;
                        t.setMomentum(d(s, o), 0)
                    }
                    s === Q.Y && (o = r.y - n.top - h.thumb.displaySize / 2, t.setMomentum(0, d(s, o)))
                }
            })), r(o, "mousedown", (function(i) {
                if (F(i.target, [c.thumb.element, h.thumb.element])) {
                    e = !0;
                    var r = i.target,
                        l = _(i),
                        d = r.getBoundingClientRect();
                    s = u(r), a = {
                        x: l.x - d.left,
                        y: l.y - d.top
                    }, n = o.getBoundingClientRect(), W(t.containerEl, {
                        "-user-select": "none"
                    })
                }
            })), r(window, "mousemove", (function(r) {
                if (e) {
                    i = !0;
                    var o = _(r);
                    if (s === Q.X) {
                        var l = o.x - a.x - n.left;
                        t.setMomentum(d(s, l), 0)
                    }
                    s === Q.Y && (l = o.y - a.y - n.top, t.setMomentum(0, d(s, l)))
                }
            })), r(window, "mouseup blur", (function() {
                e = i = !1, W(t.containerEl, {
                    "-user-select": ""
                })
            }))
        }
        function st(t) {
            Y(t)(window, "resize", I(t.update.bind(t), 300))
        }
        function nt(t) {
            var e, i = Y(t),
                a = t.containerEl,
                s = t.contentEl,
                n = !1,
                r = !1;
            i(window, "mousemove", (function(i) {
                n && (cancelAnimationFrame(e), function i(a) {
                    var s = a.x,
                        n = a.y;
                    if (s || n) {
                        var r = t.offset,
                            o = t.limit;
                        t.setMomentum(C(r.x + s, 0, o.x) - r.x, C(r.y + n, 0, o.y) - r.y), e = requestAnimationFrame((function() {
                            i({
                                x: s,
                                y: n
                            })
                        }))
                    }
                }(function(t, e) {
                    var i = t.bounding,
                        a = i.top,
                        s = i.right,
                        n = i.bottom,
                        r = i.left,
                        o = _(e),
                        l = o.x,
                        c = o.y,
                        h = {
                            x: 0,
                            y: 0
                        };
                    return 0 === l && 0 === c || (l > s - 20 ? h.x = l - s + 20 : l < r + 20 && (h.x = l - r - 20), c > n - 20 ? h.y = c - n + 20 : c < a + 20 && (h.y = c - a - 20), h.x *= 2, h.y *= 2), h
                }(t, i)))
            })), i(s, "contextmenu", (function() {
                r = !0, cancelAnimationFrame(e), n = !1
            })), i(s, "mousedown", (function() {
                r = !1
            })), i(s, "selectstart", (function() {
                r || (cancelAnimationFrame(e), n = !0)
            })), i(window, "mouseup blur", (function() {
                cancelAnimationFrame(e), n = !1, r = !1
            })), i(a, "scroll", (function(t) {
                t.preventDefault(), a.scrollTop = a.scrollLeft = 0
            }))
        }
        function rt(t) {
            var e, i = t.options.delegateTo || t.containerEl,
                a = new j,
                s = Y(t),
                n = 0;
            s(i, "touchstart", (function(i) {
                a.track(i), t.setMomentum(0, 0), 0 === n && (e = t.options.damping, t.options.damping = Math.max(e, .5)), n++
            })), s(i, "touchmove", (function(e) {
                if (!J || J === t) {
                    a.update(e);
                    var i = a.getDelta(),
                        s = i.x,
                        n = i.y;
                    t.addTransformableMomentum(s, n, e, (function(i) {
                        i && e.cancelable && (e.preventDefault(), J = t)
                    }))
                }
            })), s(i, "touchcancel touchend", (function(i) {
                var s = a.getEasingDistance(e);
                t.addTransformableMomentum(s.x, s.y, i), 0 == --n && (t.options.damping = e), a.release(i), J = null
            }))
        }
        function ot(t) {
            Y(t)(t.options.delegateTo || t.containerEl, "onwheel" in window || document.implementation.hasFeature("Events.wheel", "3.0") ? "wheel" : "mousewheel", (function(e) {
                var i = function(t) {
                        if ("deltaX" in t) {
                            var e = ht(t.deltaMode);
                            return {
                                x: t.deltaX / lt.STANDARD * e,
                                y: t.deltaY / lt.STANDARD * e
                            }
                        }
                        return "wheelDeltaX" in t ? {
                            x: t.wheelDeltaX / lt.OTHERS,
                            y: t.wheelDeltaY / lt.OTHERS
                        } : {
                            x: 0,
                            y: t.wheelDelta / lt.OTHERS
                        }
                    }(e),
                    a = i.x,
                    s = i.y;
                t.addTransformableMomentum(a, s, e, (function(t) {
                    t && e.preventDefault()
                }))
            }))
        }! function(t) {
            t[t.TAB = 9] = "TAB", t[t.SPACE = 32] = "SPACE", t[t.PAGE_UP = 33] = "PAGE_UP", t[t.PAGE_DOWN = 34] = "PAGE_DOWN", t[t.END = 35] = "END", t[t.HOME = 36] = "HOME", t[t.LEFT = 37] = "LEFT", t[t.UP = 38] = "UP", t[t.RIGHT = 39] = "RIGHT", t[t.DOWN = 40] = "DOWN"
        }(K || (K = {})),
        function(t) {
            t[t.X = 0] = "X", t[t.Y = 1] = "Y"
        }(Q || (Q = {}));
        var lt = {
                STANDARD: 1,
                OTHERS: -3
            },
            ct = [1, 28, 500],
            ht = function(t) {
                return ct[t] || ct[0]
            },
            dt = new Map,
            ut = function() {
                function t(t, e) {
                    var i = this;
                    this.offset = {
                        x: 0,
                        y: 0
                    }, this.limit = {
                        x: 1 / 0,
                        y: 1 / 0
                    }, this.bounding = {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    }, this._plugins = [], this._momentum = {
                        x: 0,
                        y: 0
                    }, this._listeners = new Set, this.containerEl = t;
                    var a = this.contentEl = document.createElement("div");
                    this.options = new D(e), t.setAttribute("data-scrollbar", "true"), t.setAttribute("tabindex", "-1"), W(t, {
                        overflow: "hidden",
                        outline: "none"
                    }), window.navigator.msPointerEnabled && (t.style.msTouchAction = "none"), a.className = "scroll-content", Array.from(t.childNodes).forEach((function(t) {
                        a.appendChild(t)
                    })), t.appendChild(a), this.track = new U(this), this.size = this.getSize(), this._plugins = function(t, e) {
                        return Array.from(et.order).filter((function(t) {
                            return !1 !== e[t]
                        })).map((function(i) {
                            var a = new(0, et.constructors[i])(t, e[i]);
                            return e[i] = a.options, a
                        }))
                    }(this, this.options.plugins);
                    var s = t.scrollLeft,
                        n = t.scrollTop;
                    t.scrollLeft = t.scrollTop = 0, this.setPosition(s, n, {
                        withoutCallbacks: !0
                    });
                    var r = window.ResizeObserver;
                    "function" == typeof r && (this._observer = new r((function() {
                        i.update()
                    })), this._observer.observe(a)), dt.set(t, this), requestAnimationFrame((function() {
                        i._init()
                    }))
                }
                return Object.defineProperty(t.prototype, "parent", {
                    get: function() {
                        for (var t = this.containerEl.parentElement; t;) {
                            var e = dt.get(t);
                            if (e) return e;
                            t = t.parentElement
                        }
                        return null
                    },
                    enumerable: !0,
                    configurable: !0
                }), Object.defineProperty(t.prototype, "scrollTop", {
                    get: function() {
                        return this.offset.y
                    },
                    set: function(t) {
                        this.setPosition(this.scrollLeft, t)
                    },
                    enumerable: !0,
                    configurable: !0
                }), Object.defineProperty(t.prototype, "scrollLeft", {
                    get: function() {
                        return this.offset.x
                    },
                    set: function(t) {
                        this.setPosition(t, this.scrollTop)
                    },
                    enumerable: !0,
                    configurable: !0
                }), t.prototype.getSize = function() {
                    return function(t) {
                        var e = t.containerEl,
                            i = t.contentEl,
                            a = getComputedStyle(e),
                            s = ["paddingTop", "paddingBottom", "paddingLeft", "paddingRight"].map((function(t) {
                                return a[t] ? parseFloat(a[t]) : 0
                            })),
                            n = s[0] + s[1],
                            r = s[2] + s[3];
                        return {
                            container: {
                                width: e.clientWidth,
                                height: e.clientHeight
                            },
                            content: {
                                width: i.offsetWidth - i.clientWidth + i.scrollWidth + r,
                                height: i.offsetHeight - i.clientHeight + i.scrollHeight + n
                            }
                        }
                    }(this)
                }, t.prototype.update = function() {
                    ! function(t) {
                        var e = t.getSize(),
                            i = {
                                x: Math.max(e.content.width - e.container.width, 0),
                                y: Math.max(e.content.height - e.container.height, 0)
                            },
                            a = t.containerEl.getBoundingClientRect(),
                            s = {
                                top: Math.max(a.top, 0),
                                right: Math.min(a.right, window.innerWidth),
                                bottom: Math.min(a.bottom, window.innerHeight),
                                left: Math.max(a.left, 0)
                            };
                        t.size = e, t.limit = i, t.bounding = s, t.track.update(), t.setPosition()
                    }(this), this._plugins.forEach((function(t) {
                        t.onUpdate()
                    }))
                }, t.prototype.isVisible = function(t) {
                    return function(t, e) {
                        var i = t.bounding,
                            a = e.getBoundingClientRect(),
                            s = Math.max(i.top, a.top),
                            n = Math.max(i.left, a.left),
                            r = Math.min(i.right, a.right);
                        return s < Math.min(i.bottom, a.bottom) && n < r
                    }(this, t)
                }, t.prototype.setPosition = function(t, e, i) {
                    var a = this;
                    void 0 === t && (t = this.offset.x), void 0 === e && (e = this.offset.y), void 0 === i && (i = {});
                    var s = function(t, e, i) {
                        var a = t.options,
                            s = t.offset,
                            r = t.limit,
                            o = t.track,
                            l = t.contentEl;
                        return a.renderByPixels && (e = Math.round(e), i = Math.round(i)), e = C(e, 0, r.x), i = C(i, 0, r.y), e !== s.x && o.xAxis.show(), i !== s.y && o.yAxis.show(), a.alwaysShowTracks || o.autoHideOnIdle(), e === s.x && i === s.y ? null : (s.x = e, s.y = i, W(l, {
                            "-transform": "translate3d(" + -e + "px, " + -i + "px, 0)"
                        }), o.update(), {
                            offset: n({}, s),
                            limit: n({}, r)
                        })
                    }(this, t, e);
                    s && !i.withoutCallbacks && this._listeners.forEach((function(t) {
                        t.call(a, s)
                    }))
                }, t.prototype.scrollTo = function(t, e, i, a) {
                    void 0 === t && (t = this.offset.x), void 0 === e && (e = this.offset.y), void 0 === i && (i = 0), void 0 === a && (a = {}),
                        function(t, e, i, a, s) {
                            void 0 === a && (a = 0);
                            var n = void 0 === s ? {} : s,
                                r = n.easing,
                                o = void 0 === r ? Z : r,
                                l = n.callback,
                                c = t.options,
                                h = t.offset,
                                d = t.limit;
                            c.renderByPixels && (e = Math.round(e), i = Math.round(i));
                            var u = h.x,
                                p = h.y,
                                g = C(e, 0, d.x) - u,
                                f = C(i, 0, d.y) - p,
                                x = Date.now();
                            cancelAnimationFrame(q.get(t)),
                                function e() {
                                    var i = Date.now() - x,
                                        s = a ? o(Math.min(i / a, 1)) : 1;
                                    if (t.setPosition(u + g * s, p + f * s), i >= a) "function" == typeof l && l.call(t);
                                    else {
                                        var n = requestAnimationFrame(e);
                                        q.set(t, n)
                                    }
                                }()
                        }(this, t, e, i, a)
                }, t.prototype.scrollIntoView = function(t, e) {
                    void 0 === e && (e = {}),
                        function(t, e, i) {
                            var a = void 0 === i ? {} : i,
                                s = a.alignToTop,
                                n = void 0 === s || s,
                                r = a.onlyScrollIfNeeded,
                                o = void 0 !== r && r,
                                l = a.offsetTop,
                                c = void 0 === l ? 0 : l,
                                h = a.offsetLeft,
                                d = void 0 === h ? 0 : h,
                                u = a.offsetBottom,
                                p = void 0 === u ? 0 : u,
                                g = t.containerEl,
                                f = t.bounding,
                                x = t.offset,
                                v = t.limit;
                            if (e && g.contains(e)) {
                                var m = e.getBoundingClientRect();
                                if (!o || !t.isVisible(e)) {
                                    var b = n ? m.top - f.top - c : m.bottom - f.bottom + p;
                                    t.setMomentum(m.left - f.left - d, C(b, -x.y, v.y - x.y))
                                }
                            }
                        }(this, t, e)
                }, t.prototype.addListener = function(t) {
                    if ("function" != typeof t) throw new TypeError("[smooth-scrollbar] scrolling listener should be a function");
                    this._listeners.add(t)
                }, t.prototype.removeListener = function(t) {
                    this._listeners.delete(t)
                }, t.prototype.addTransformableMomentum = function(t, e, i, a) {
                    this._updateDebounced();
                    var s = this._plugins.reduce((function(t, e) {
                            return e.transformDelta(t, i) || t
                        }), {
                            x: t,
                            y: e
                        }),
                        n = !this._shouldPropagateMomentum(s.x, s.y);
                    n && this.addMomentum(s.x, s.y), a && a.call(this, n)
                }, t.prototype.addMomentum = function(t, e) {
                    this.setMomentum(this._momentum.x + t, this._momentum.y + e)
                }, t.prototype.setMomentum = function(t, e) {
                    0 === this.limit.x && (t = 0), 0 === this.limit.y && (e = 0), this.options.renderByPixels && (t = Math.round(t), e = Math.round(e)), this._momentum.x = t, this._momentum.y = e
                }, t.prototype.updatePluginOptions = function(t, e) {
                    this._plugins.forEach((function(i) {
                        i.name === t && Object.assign(i.options, e)
                    }))
                }, t.prototype.destroy = function() {
                    var t = this.containerEl,
                        e = this.contentEl;
                    ! function(t) {
                        var e = X.get(t);
                        e && (e.forEach((function(t) {
                            var e = t.elem,
                                i = t.eventName,
                                a = t.handler;
                            e.removeEventListener(i, a, R())
                        })), X.delete(t))
                    }(this), this._listeners.clear(), this.setMomentum(0, 0), cancelAnimationFrame(this._renderID), this._observer && this._observer.disconnect(), dt.delete(this.containerEl);
                    for (var i = Array.from(e.childNodes); t.firstChild;) t.removeChild(t.firstChild);
                    i.forEach((function(e) {
                        t.appendChild(e)
                    })), W(t, {
                        overflow: ""
                    }), t.scrollTop = this.scrollTop, t.scrollLeft = this.scrollLeft, this._plugins.forEach((function(t) {
                        t.onDestroy()
                    })), this._plugins.length = 0
                }, t.prototype._init = function() {
                    var t = this;
                    this.update(), Object.keys(a).forEach((function(e) {
                        a[e](t)
                    })), this._plugins.forEach((function(t) {
                        t.onInit()
                    })), this._render()
                }, t.prototype._updateDebounced = function() {
                    this.update()
                }, t.prototype._shouldPropagateMomentum = function(t, e) {
                    void 0 === t && (t = 0), void 0 === e && (e = 0);
                    var i = this.options,
                        a = this.offset,
                        s = this.limit;
                    if (!i.continuousScrolling) return !1;
                    0 === s.x && 0 === s.y && this._updateDebounced();
                    var n = C(t + a.x, 0, s.x),
                        r = C(e + a.y, 0, s.y),
                        o = !0;
                    return (o = (o = o && n === a.x) && r === a.y) && (a.x === s.x || 0 === a.x || a.y === s.y || 0 === a.y)
                }, t.prototype._render = function() {
                    var t = this._momentum;
                    if (t.x || t.y) {
                        var e = this._nextTick("x"),
                            i = this._nextTick("y");
                        t.x = e.momentum, t.y = i.momentum, this.setPosition(e.position, i.position)
                    }
                    var a = n({}, this._momentum);
                    this._plugins.forEach((function(t) {
                        t.onRender(a)
                    })), this._renderID = requestAnimationFrame(this._render.bind(this))
                }, t.prototype._nextTick = function(t) {
                    var e = this.options,
                        i = this.offset,
                        a = this._momentum,
                        s = i[t],
                        n = a[t];
                    if (Math.abs(n) <= .1) return {
                        momentum: 0,
                        position: s + n
                    };
                    var r = n * (1 - e.damping);
                    return e.renderByPixels && (r |= 0), {
                        momentum: r,
                        position: s + n - r
                    }
                }, r([z(100, {
                    leading: !0
                })], t.prototype, "_updateDebounced", null), t
            }(),
            pt = "smooth-scrollbar-style",
            gt = !1;
        function ft() {
            if (!gt && "undefined" != typeof window) {
                var t = document.createElement("style");
                t.id = pt, t.textContent = "\n[data-scrollbar] {\n  display: block;\n  position: relative;\n}\n\n.scroll-content {\n  display: flow-root;\n  -webkit-transform: translate3d(0, 0, 0);\n          transform: translate3d(0, 0, 0);\n}\n\n.scrollbar-track {\n  position: absolute;\n  opacity: 0;\n  z-index: 1;\n  background: rgba(222, 222, 222, .75);\n  -webkit-user-select: none;\n     -moz-user-select: none;\n      -ms-user-select: none;\n          user-select: none;\n  -webkit-transition: opacity 0.5s 0.5s ease-out;\n          transition: opacity 0.5s 0.5s ease-out;\n}\n.scrollbar-track.show,\n.scrollbar-track:hover {\n  opacity: 1;\n  -webkit-transition-delay: 0s;\n          transition-delay: 0s;\n}\n\n.scrollbar-track-x {\n  bottom: 0;\n  left: 0;\n  width: 100%;\n  height: 8px;\n}\n.scrollbar-track-y {\n  top: 0;\n  right: 0;\n  width: 8px;\n  height: 100%;\n}\n.scrollbar-thumb {\n  position: absolute;\n  top: 0;\n  left: 0;\n  width: 8px;\n  height: 8px;\n  background: rgba(0, 0, 0, .5);\n  border-radius: 4px;\n}\n", document.head && document.head.appendChild(t), gt = !0
            }
        }
        i.d(e, "ScrollbarPlugin", (function() {
            return tt
        }));
        var xt = function(t) {
            function e() {
                return null !== t && t.apply(this, arguments) || this
            }
            return function(t, e) {
                function i() {
                    this.constructor = t
                }
                s(t, e), t.prototype = null === e ? Object.create(e) : (i.prototype = e.prototype, new i)
            }(e, t), e.init = function(t, e) {
                if (!t || 1 !== t.nodeType) throw new TypeError("expect element to be DOM Element, but got " + t);
                return ft(), dt.has(t) ? dt.get(t) : new ut(t, e)
            }, e.initAll = function(t) {
                return Array.from(document.querySelectorAll("[data-scrollbar]"), (function(i) {
                    return e.init(i, t)
                }))
            }, e.has = function(t) {
                return dt.has(t)
            }, e.get = function(t) {
                return dt.get(t)
            }, e.getAll = function() {
                return Array.from(dt.values())
            }, e.destroy = function(t) {
                var e = dt.get(t);
                e && e.destroy()
            }, e.destroyAll = function() {
                dt.forEach((function(t) {
                    t.destroy()
                }))
            }, e.use = function() {
                for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
                return function() {
                    for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
                    t.forEach((function(t) {
                        var e = t.pluginName;
                        if (!e) throw new TypeError("plugin name is required");
                        et.order.add(e), et.constructors[e] = t
                    }))
                }.apply(void 0, t)
            }, e.attachStyle = function() {
                return ft()
            }, e.detachStyle = function() {
                return function() {
                    if (gt && "undefined" != typeof window) {
                        var t = document.getElementById(pt);
                        t && t.parentNode && (t.parentNode.removeChild(t), gt = !1)
                    }
                }()
            }, e.version = "8.7.5", e.ScrollbarPlugin = tt, e
        }(ut);
        e.default = xt
    }]).default
}));


function modalNotify(text){
    $("#popup-notify").find(".modal-body").html(text);
    $('#popup-notify').modal('show');
}

function ValidationFormSelf(ele='')
{
    if(ele){
        $("."+ele).find("input[type=submit]").removeAttr("disabled");
        var forms = document.getElementsByClassName(ele);
        var validation = Array.prototype.filter.call(forms,function(form){
            form.addEventListener('submit', function(event){
                if(form.checkValidity() === false)
                {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }
}

function loadPagingAjax(url='',eShow='',rowCount=0,perpage=8){
    if($(eShow).length && url) {
        $.ajax({
            url: url,
            type: "GET",
            data: {
                rowCount: rowCount,
                perpage: perpage,
                eShow: eShow
            },
            success: function(result){
                $(eShow).html(result);
            }
        });
    }
}

function doEnter(event,obj)
{
    if(event.keyCode == 13 || event.which == 13) onSearch(obj);
}

function onSearch(obj) 
{           
    var keyword = $("#"+obj).val();
    if(keyword==''){
        modalNotify(LANG['no_keywords']);
        return false;
    } else {
        location.href = "tim-kiem?keyword="+encodeURI(keyword);
        loadPage(document.location);            
    }
}

function ResizeWebsite(){
    $(".footer").css({marginBottom:$(".toolbar").innerHeight()});
}

function goToByScroll(id)
{
    var offsetMenu = 0;
    id = id.replace("#", "");
    if($(".menu").length) offsetMenu = $(".menu").height();
    $('html,body').animate({
        scrollTop: $("#" + id).offset().top - (offsetMenu * 2)
    }, 'slow');
}

function update_cart(pid=0,code='',quantity=1)
{
    if(pid) {
        var ship = $(".price-ship").val();
        var endow = $(".price-endow").val();

        $.ajax({
            type: "POST",
            url: "ajax/ajax_update_cart.php",
            dataType: 'json',
            data: {pid:pid,code:code,q:quantity,ship:ship,endow:endow},
            success: function(result){
                if(result){
                    $('.load-price-'+code).html(result.gia);
                    $('.load-price-new-'+code).html(result.giamoi);
                    $('.price-temp').val(result.temp);
                    $('.load-price-temp').html(result.tempText);
                    $('.price-total').val(result.total);
                    $('.load-price-total').html(result.totalText);
                }
            }
        });
    }
}

function load_district(id=0){
    $.ajax({
        type: 'post',
        url: 'ajax/ajax_district.php',
        data: {id_city:id},
        success: function(result){
            load_ship();
            $(".select-district").html(result);
            $(".select-wards").html('<option value="">'+LANG['wards']+'</option>');
        }
    });
}

function load_wards(id=0){
    $.ajax({
        type: 'post',
        url: 'ajax/ajax_wards.php',
        data: {id_district:id},
        success: function(result){
            load_ship();
            $(".select-wards").html(result);
        }
    });
}

function load_ship(id=0){
    if(SHIP_CART){
        var endow = $(".price-endow").val();
        $.ajax({
            type: "POST",
            url: "ajax/ajax_ship_cart.php",
            dataType: 'json',
            data: {id:id,endow:endow},
            success: function(result){
                if(result){
                    $('.load-price-ship').html(result.shipText);
                    $('.load-price-total').html(result.totalText);
                    $('.price-ship').val(result.ship);
                    $('.price-total').val(result.total);
                }   
            }
        }); 
    }
}

let Scrollbar
if (typeof Scrollbar !== typeof null) {
    if (document.querySelectorAll(".data-scrollbar").length) {
        Scrollbar = window.Scrollbar
        Scrollbar.init(document.querySelector('.data-scrollbar'), {
            continuousScrolling: false,
        })
    }
}

const options = {
     theme:"sk-cube-grid",
     backgroundColor:"#000000",
};

$(document).ready(function() {
    $(document).on('submit','form#form-recaptchaResponseDatTourIndex',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatTourIndex' }).then(function (token) {
            var recaptchaResponseDatTourIndex = document.getElementById('recaptchaResponseDatTourIndex');
            recaptchaResponseDatTourIndex.value = token;
            SaveData('form#form-recaptchaResponseDatTourIndex');
        });
        return false;
    });
    $(document).on('submit','form#form-recaptchaResponseDatVeNgay',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatVeNgay' }).then(function (token) {
            var recaptchaResponseDatVeNgay = document.getElementById('recaptchaResponseDatVeNgay');
            recaptchaResponseDatVeNgay.value = token;
            SaveData('form#form-recaptchaResponseDatVeNgay');
        });
        return false;
    });

    $(document).on('submit','form#form-recaptchaResponseDatvexe',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatvexe' }).then(function (token) {
            var recaptchaResponseDatvexe = document.getElementById('recaptchaResponseDatvexe');
            recaptchaResponseDatvexe.value = token;
            SaveData('form#form-recaptchaResponseDatvexe');
        });
        return false;
    });
    $(document).on('submit','form#form-recaptchaResponseDatban',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatban' }).then(function (token) {
            var recaptchaResponseDatban = document.getElementById('recaptchaResponseDatban');
            recaptchaResponseDatban.value = token;
            SaveData('form#form-recaptchaResponseDatban');
        });
        return false;
    });
    $(document).on('submit','form#form-recaptchaResponseDatphong',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatphong' }).then(function (token) {
            var recaptchaResponseDatphong = document.getElementById('recaptchaResponseDatphong1');
            recaptchaResponseDatphong.value = token;
            SaveData('form#form-recaptchaResponseDatphong');
        });
        return false;
    });
    $(document).on('submit','form#form-recaptchaResponseDatphong1',function(){
        HoldOn.open(options);
        grecaptcha.execute(sitekey, { action: 'recaptchaResponseDatphong' }).then(function (token) {
            var recaptchaResponseDatphong = document.getElementById('recaptchaResponseDatphong');
            recaptchaResponseDatphong.value = token;
            SaveData('form#form-recaptchaResponseDatphong1');
        });
        return false;
    });
});

function SaveData($form){
    $.ajax({
        url: 'ajax/admin.php',
        type: 'POST',
        dataType: 'json',
        data: $($form).serialize(),
        success:function(data){
            HoldOn.close();
            if(data.error==1){
                Swal.fire({
                    title: data.title,
                    text: data.mess,
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                    location.reload();
                });
            }else{
                Swal.fire({
                    title: data.title,
                    text: data.mess,
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                    location.reload();
                });
            }
        }
    })
}