<?php

/* AdminBundle:CtSourceEnergie:edit.html.twig */
class __TwigTemplate_85f8d3768943a1895a53be71d27752bf03e3d8d1492c3a334eea2a0c45834602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtSourceEnergie:edit.html.twig", 1);
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
        $__internal_47150cb9319b17fa365a490bc144345a926aacb8baa574fb52ac78760268ead1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47150cb9319b17fa365a490bc144345a926aacb8baa574fb52ac78760268ead1->enter($__internal_47150cb9319b17fa365a490bc144345a926aacb8baa574fb52ac78760268ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:edit.html.twig"));

        $__internal_3f804a0f391fd17542afc694fdd0679a602f9cbb2472e754a6a2ade5c5caf646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f804a0f391fd17542afc694fdd0679a602f9cbb2472e754a6a2ade5c5caf646->enter($__internal_3f804a0f391fd17542afc694fdd0679a602f9cbb2472e754a6a2ade5c5caf646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47150cb9319b17fa365a490bc144345a926aacb8baa574fb52ac78760268ead1->leave($__internal_47150cb9319b17fa365a490bc144345a926aacb8baa574fb52ac78760268ead1_prof);

        
        $__internal_3f804a0f391fd17542afc694fdd0679a602f9cbb2472e754a6a2ade5c5caf646->leave($__internal_3f804a0f391fd17542afc694fdd0679a602f9cbb2472e754a6a2ade5c5caf646_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f05043cfe396165918ad75443fbf5d36e0903991ce6f046ab4b688fb091afc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05043cfe396165918ad75443fbf5d36e0903991ce6f046ab4b688fb091afc27->enter($__internal_f05043cfe396165918ad75443fbf5d36e0903991ce6f046ab4b688fb091afc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6812d27166f6e2582de2d3ef2a1205038b776c6c393d096a32c9913429855d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6812d27166f6e2582de2d3ef2a1205038b776c6c393d096a32c9913429855d7c->enter($__internal_6812d27166f6e2582de2d3ef2a1205038b776c6c393d096a32c9913429855d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Source Energie ";
        
        $__internal_6812d27166f6e2582de2d3ef2a1205038b776c6c393d096a32c9913429855d7c->leave($__internal_6812d27166f6e2582de2d3ef2a1205038b776c6c393d096a32c9913429855d7c_prof);

        
        $__internal_f05043cfe396165918ad75443fbf5d36e0903991ce6f046ab4b688fb091afc27->leave($__internal_f05043cfe396165918ad75443fbf5d36e0903991ce6f046ab4b688fb091afc27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_45ce314a049e40a50d74fcd09a1e028a4a93d6dddc68fd2d52a07cc720049b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ce314a049e40a50d74fcd09a1e028a4a93d6dddc68fd2d52a07cc720049b67->enter($__internal_45ce314a049e40a50d74fcd09a1e028a4a93d6dddc68fd2d52a07cc720049b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcfe7eac38ad39da5f4c6bdfdf6b2f5a1652e67007a5be39bccb98d5df52a2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe7eac38ad39da5f4c6bdfdf6b2f5a1652e67007a5be39bccb98d5df52a2cb->enter($__internal_dcfe7eac38ad39da5f4c6bdfdf6b2f5a1652e67007a5be39bccb98d5df52a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dcfe7eac38ad39da5f4c6bdfdf6b2f5a1652e67007a5be39bccb98d5df52a2cb->leave($__internal_dcfe7eac38ad39da5f4c6bdfdf6b2f5a1652e67007a5be39bccb98d5df52a2cb_prof);

        
        $__internal_45ce314a049e40a50d74fcd09a1e028a4a93d6dddc68fd2d52a07cc720049b67->leave($__internal_45ce314a049e40a50d74fcd09a1e028a4a93d6dddc68fd2d52a07cc720049b67_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtSourceEnergie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Source Energie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtSourceEnergie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtSourceEnergie/edit.html.twig");
    }
}
