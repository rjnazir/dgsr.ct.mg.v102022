<?php

/* AdminBundle:CtCentre:edit.html.twig */
class __TwigTemplate_e4577fd03bcdcb9c89d97d33bc4962a942ba81b4ff6103a681de6d479701ff22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:edit.html.twig", 1);
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
        $__internal_179b69519b98126c5269e00d8a88eb9129947bf088f553d61a72ca980dca6915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179b69519b98126c5269e00d8a88eb9129947bf088f553d61a72ca980dca6915->enter($__internal_179b69519b98126c5269e00d8a88eb9129947bf088f553d61a72ca980dca6915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        $__internal_a631a175650f14b9c64fca9eb4e6411073cd2651b755a8512d20aec49f16bfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a631a175650f14b9c64fca9eb4e6411073cd2651b755a8512d20aec49f16bfa5->enter($__internal_a631a175650f14b9c64fca9eb4e6411073cd2651b755a8512d20aec49f16bfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179b69519b98126c5269e00d8a88eb9129947bf088f553d61a72ca980dca6915->leave($__internal_179b69519b98126c5269e00d8a88eb9129947bf088f553d61a72ca980dca6915_prof);

        
        $__internal_a631a175650f14b9c64fca9eb4e6411073cd2651b755a8512d20aec49f16bfa5->leave($__internal_a631a175650f14b9c64fca9eb4e6411073cd2651b755a8512d20aec49f16bfa5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abb6b3d456c38401284c669ffb41bc3be84d6401d84599a7153d9576351f884a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb6b3d456c38401284c669ffb41bc3be84d6401d84599a7153d9576351f884a->enter($__internal_abb6b3d456c38401284c669ffb41bc3be84d6401d84599a7153d9576351f884a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec39a45b5361c19273349f8eab5c88848c2d7263b90a4ff541a0aa1373e4fb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec39a45b5361c19273349f8eab5c88848c2d7263b90a4ff541a0aa1373e4fb6c->enter($__internal_ec39a45b5361c19273349f8eab5c88848c2d7263b90a4ff541a0aa1373e4fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_ec39a45b5361c19273349f8eab5c88848c2d7263b90a4ff541a0aa1373e4fb6c->leave($__internal_ec39a45b5361c19273349f8eab5c88848c2d7263b90a4ff541a0aa1373e4fb6c_prof);

        
        $__internal_abb6b3d456c38401284c669ffb41bc3be84d6401d84599a7153d9576351f884a->leave($__internal_abb6b3d456c38401284c669ffb41bc3be84d6401d84599a7153d9576351f884a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc4699fe4ed9dbc2846004e2e421b1592e2d450fd47db40d1bad4dad02bdd6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4699fe4ed9dbc2846004e2e421b1592e2d450fd47db40d1bad4dad02bdd6de->enter($__internal_fc4699fe4ed9dbc2846004e2e421b1592e2d450fd47db40d1bad4dad02bdd6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca5720526f3838a43473d49b1256c5faf6531fbbadde016a250ee8724ea81459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5720526f3838a43473d49b1256c5faf6531fbbadde016a250ee8724ea81459->enter($__internal_ca5720526f3838a43473d49b1256c5faf6531fbbadde016a250ee8724ea81459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ca5720526f3838a43473d49b1256c5faf6531fbbadde016a250ee8724ea81459->leave($__internal_ca5720526f3838a43473d49b1256c5faf6531fbbadde016a250ee8724ea81459_prof);

        
        $__internal_fc4699fe4ed9dbc2846004e2e421b1592e2d450fd47db40d1bad4dad02bdd6de->leave($__internal_fc4699fe4ed9dbc2846004e2e421b1592e2d450fd47db40d1bad4dad02bdd6de_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctProvince) }}
                        {{ form_row(edit_form.ctrNom) }}
                        {{ form_row(edit_form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/edit.html.twig");
    }
}
