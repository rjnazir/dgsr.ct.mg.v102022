<?php

/* @Admin/CtProcesVerbal/edit.html.twig */
class __TwigTemplate_0615790c0322bdd3396d41e1c3ca3e2cac37b6f8de785325934a2939b018667b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/edit.html.twig", 1);
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
        $__internal_f2b700b9a3807ec0c188355fb93f863e827cb7aa2a60dc73dd64f16aa30fe8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b700b9a3807ec0c188355fb93f863e827cb7aa2a60dc73dd64f16aa30fe8dc->enter($__internal_f2b700b9a3807ec0c188355fb93f863e827cb7aa2a60dc73dd64f16aa30fe8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        $__internal_7176a5bf8dc5342f0adbf0263c49fae19ecfc9311fc60e09ac1d761973e496a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7176a5bf8dc5342f0adbf0263c49fae19ecfc9311fc60e09ac1d761973e496a7->enter($__internal_7176a5bf8dc5342f0adbf0263c49fae19ecfc9311fc60e09ac1d761973e496a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b700b9a3807ec0c188355fb93f863e827cb7aa2a60dc73dd64f16aa30fe8dc->leave($__internal_f2b700b9a3807ec0c188355fb93f863e827cb7aa2a60dc73dd64f16aa30fe8dc_prof);

        
        $__internal_7176a5bf8dc5342f0adbf0263c49fae19ecfc9311fc60e09ac1d761973e496a7->leave($__internal_7176a5bf8dc5342f0adbf0263c49fae19ecfc9311fc60e09ac1d761973e496a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b8461050cb29a9981fa6f72a2318287c7e4e50850d41f994606286c6a00d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b8461050cb29a9981fa6f72a2318287c7e4e50850d41f994606286c6a00d22->enter($__internal_f7b8461050cb29a9981fa6f72a2318287c7e4e50850d41f994606286c6a00d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b9760d6364a96ccfb6fa4d0713c3ad1e754a4136c16f45a41273df95768a3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9760d6364a96ccfb6fa4d0713c3ad1e754a4136c16f45a41273df95768a3c9->enter($__internal_5b9760d6364a96ccfb6fa4d0713c3ad1e754a4136c16f45a41273df95768a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_5b9760d6364a96ccfb6fa4d0713c3ad1e754a4136c16f45a41273df95768a3c9->leave($__internal_5b9760d6364a96ccfb6fa4d0713c3ad1e754a4136c16f45a41273df95768a3c9_prof);

        
        $__internal_f7b8461050cb29a9981fa6f72a2318287c7e4e50850d41f994606286c6a00d22->leave($__internal_f7b8461050cb29a9981fa6f72a2318287c7e4e50850d41f994606286c6a00d22_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e15683fc4bdb3c17f704dbbc3c4c48257c6612a40d3383f99418ed9821edd466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15683fc4bdb3c17f704dbbc3c4c48257c6612a40d3383f99418ed9821edd466->enter($__internal_e15683fc4bdb3c17f704dbbc3c4c48257c6612a40d3383f99418ed9821edd466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a8600497d42d141be2551e942f06547d71aa9081f111a5a8f192501b9c2c3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8600497d42d141be2551e942f06547d71aa9081f111a5a8f192501b9c2c3a5->enter($__internal_8a8600497d42d141be2551e942f06547d71aa9081f111a5a8f192501b9c2c3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
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
        
        $__internal_8a8600497d42d141be2551e942f06547d71aa9081f111a5a8f192501b9c2c3a5->leave($__internal_8a8600497d42d141be2551e942f06547d71aa9081f111a5a8f192501b9c2c3a5_prof);

        
        $__internal_e15683fc4bdb3c17f704dbbc3c4c48257c6612a40d3383f99418ed9821edd466->leave($__internal_e15683fc4bdb3c17f704dbbc3c4c48257c6612a40d3383f99418ed9821edd466_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

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
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProcesVerbal/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\edit.html.twig");
    }
}
