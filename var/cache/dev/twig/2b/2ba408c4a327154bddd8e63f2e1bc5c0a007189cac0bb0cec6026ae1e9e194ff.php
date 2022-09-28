<?php

/* AdminBundle:CtTypeReception:edit.html.twig */
class __TwigTemplate_8e180d53704f7145da061555613d51380b1f3df28ea3aef541f5728d8f0b6815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_189044f47d7cfce4e051c2c3f94b3e283f66e059618d52601dd2752458d664cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189044f47d7cfce4e051c2c3f94b3e283f66e059618d52601dd2752458d664cb->enter($__internal_189044f47d7cfce4e051c2c3f94b3e283f66e059618d52601dd2752458d664cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:edit.html.twig"));

        $__internal_7da77f8a74ad78eb0b23e9482c5e361962a06324952a9a445ab563c5f4e27810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da77f8a74ad78eb0b23e9482c5e361962a06324952a9a445ab563c5f4e27810->enter($__internal_7da77f8a74ad78eb0b23e9482c5e361962a06324952a9a445ab563c5f4e27810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189044f47d7cfce4e051c2c3f94b3e283f66e059618d52601dd2752458d664cb->leave($__internal_189044f47d7cfce4e051c2c3f94b3e283f66e059618d52601dd2752458d664cb_prof);

        
        $__internal_7da77f8a74ad78eb0b23e9482c5e361962a06324952a9a445ab563c5f4e27810->leave($__internal_7da77f8a74ad78eb0b23e9482c5e361962a06324952a9a445ab563c5f4e27810_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb35e6eef11a91121a9981f4cf5f9d12d1edecc181d4f1b589b933019ef46421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb35e6eef11a91121a9981f4cf5f9d12d1edecc181d4f1b589b933019ef46421->enter($__internal_fb35e6eef11a91121a9981f4cf5f9d12d1edecc181d4f1b589b933019ef46421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13b755f7a1b2660e55811a1830a5c546f61da3717d364416647e0242fb3c1b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b755f7a1b2660e55811a1830a5c546f61da3717d364416647e0242fb3c1b12->enter($__internal_13b755f7a1b2660e55811a1830a5c546f61da3717d364416647e0242fb3c1b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de réception ";
        
        $__internal_13b755f7a1b2660e55811a1830a5c546f61da3717d364416647e0242fb3c1b12->leave($__internal_13b755f7a1b2660e55811a1830a5c546f61da3717d364416647e0242fb3c1b12_prof);

        
        $__internal_fb35e6eef11a91121a9981f4cf5f9d12d1edecc181d4f1b589b933019ef46421->leave($__internal_fb35e6eef11a91121a9981f4cf5f9d12d1edecc181d4f1b589b933019ef46421_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2da617487f37fb4b6861dfe58128225a60014d5a21553d6fc7afa5464410b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2da617487f37fb4b6861dfe58128225a60014d5a21553d6fc7afa5464410b7e->enter($__internal_d2da617487f37fb4b6861dfe58128225a60014d5a21553d6fc7afa5464410b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cb93aca4e4bce042d810f23fe19126abb8200b35fec3645cfaf7a261b5c9232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb93aca4e4bce042d810f23fe19126abb8200b35fec3645cfaf7a261b5c9232->enter($__internal_5cb93aca4e4bce042d810f23fe19126abb8200b35fec3645cfaf7a261b5c9232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5cb93aca4e4bce042d810f23fe19126abb8200b35fec3645cfaf7a261b5c9232->leave($__internal_5cb93aca4e4bce042d810f23fe19126abb8200b35fec3645cfaf7a261b5c9232_prof);

        
        $__internal_d2da617487f37fb4b6861dfe58128225a60014d5a21553d6fc7afa5464410b7e->leave($__internal_d2da617487f37fb4b6861dfe58128225a60014d5a21553d6fc7afa5464410b7e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type de réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeReception:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/edit.html.twig");
    }
}
